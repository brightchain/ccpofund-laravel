<?php

namespace App\Admin\Controllers;



use App\Model\Silde;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;
use Intervention\Image\ImageManager;

class SildeController extends Controller
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

            $content->header('幻灯片');
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

            $content->header('幻灯片');
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
             
            $content->header('幻灯片');
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
        return Admin::grid(Silde::class, function (Grid $grid) {

            $grid->id('ID')->sortable();
            $grid->images('图片');
            $grid->state('内容');
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
        return Admin::form(Silde::class, function (Form $form) {
            
            $form->display('id', 'ID');
            $form->image('images','图片');
            $form->text('state','内容')->rules('required|max:30');
            $form->number('order','排序');
            $form->url('link','链接')->default('http://www.ccpofund.com');
            $form->display('created_at', 'Created At');
            $form->display('updated_at', 'Updated At');
        });
    }
}
