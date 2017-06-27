<?php

namespace App\Admin\Controllers;

use App\Model\Invent;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class InventsController extends Controller
{
    use ModelForm;

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('成功案例');
            $content->description('列表');

            $content->body($this->grid());
        });
    }

    /**
     * Edit interface.
     *
     * @param $id
     * @return Content
     */
    public function edit($id)
    {
        return Admin::content(function (Content $content) use ($id) {

            $content->header('成功案例');
            $content->description('列表');

            $content->body($this->form()->edit($id));
        });
    }

    /**
     * Create interface.
     *
     * @return Content
     */
    public function create()
    {
        return Admin::content(function (Content $content) {

            $content->header('成功案例');
            $content->description('列表');
             
            $content->body($this->form());
        });
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Admin::grid(Invent::class, function (Grid $grid) {

            $grid->model()->OrderBy('order')->orderBy('updated_at', 'DESC');
            $grid->id('ID')->sortable();
            $grid->title('案例名称');
            $grid->img('图片');
            $grid->order('排序');
            $grid->created_at();
            $grid->updated_at();
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Invent::class, function (Form $form) {

            $form->display('id', 'ID');
            $form->text('title','案例名称');
            $form->select('category','类别')->options([1 => '存量物业并购', 2 => '城市更新', 3 => '资产管理', 4 => '地产开发']);
            $form->image('img','案例图片')->uniqueName();
            $form->editor('content','内容');
            $form->number('order','排序');
            $form->display('created_at', 'Created At');
            $form->display('updated_at', 'Updated At');
        });
    }
}
