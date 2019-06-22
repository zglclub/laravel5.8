<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\View\View;
use App\Model\Config as ConfigModel;


class ConfigController extends Controller
{
    /**
     * 站点配置
     * @return \Illuminate\Contracts\View\Factory|View
     */
    public function siteConfig()
    {
        $res =new ConfigModel;
        $data  = $res->where('name','网站配置')->first();

        if ($res){
            $data = json_decode($data->config);

            return View("admin.config.siteconfig")->with("data",$data);
        }
        return View("admin.config.siteconfig");
    }

    /**
     * 添加操作
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:25',
            'name' => 'required',
            'SiteTitle' => 'required|max:25',
            'Domain' => 'required|url',
            'keywords' => 'required|string',
            'sitedesc' => 'required|string',
            'status' => 'required|int',
            'desc' => 'required|',
        ]);
        $data = $request->only(['name', 'title']);
        $data['config'] = json_encode($request->except(['_token','name','title']));
        $ConfigModel = new ConfigModel;
        $res = $ConfigModel->where('name','网站配置')->first();
        if (!$res){
            $ConfigModel->create($data);
            return redirect(route('admin.config.siteconfig'))->with("succ",'添加成功');
        }else{
            $ConfigModel->where('id',1)->update($data);
            return redirect(route('admin.config.siteconfig'))->with("succ",'更新成功');
        };



    }
}
