<?php

namespace App\Admin\Controllers;

use App\Model\Fund;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class FundController extends Controller
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

            $content->header('基金产品');
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

            $content->header('基金产品');
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

            $content->header('基金产品');
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
        return Admin::grid(Fund::class, function (Grid $grid) {

            $grid->id('ID')->sortable();
            $grid->title('基金名称');
            $grid->setup('成立时间');
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
        return Admin::form(Fund::class, function (Form $form) {

            $form->display('id', 'ID');
            $form->text('title','基金名称');
            $form->number('order','排序');
            $form->text('number','基金编号');
            $form->datetime('setup','成立时间');
            $form->datetime('recore','备案时间');
            $form->text('stage','基金备案阶段');
            $form->text('type','基金类型');
            $form->text('currency','币种');
            $form->text('name','基金管理人名称');
            $form->text('mantype','管理类型');
            $form->text('trustee','托管人名称');
            $form->textarea('field','主要投资领域')->rows(5);
            $form->text('status','运作状态');
            $form->datetime('changetime','基金信息最后更新时间');
            $form->textarea('prompt','基金协会特别提示(针对基金)');
            $form->display('created_at', 'Created At');
            $form->display('updated_at', 'Updated At');
        });
    }
}
