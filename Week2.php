<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use EasyWeChat\Kernel\Messages\News;
use EasyWeChat\Kernel\Messages\NewsItem;

use App\Article;
class Week2 extends Controller
{
//    关注公众号
    public function index()
    {
        $app = app('wechat.official_account.default');
        $app->server->push(function($message){
            $model = new Article();
            $res = $model->orderBy('id','desc')->limit(3)->get();
            $data = $model->orderBy('id','desc')->first();
            $items = [
                new NewsItem([
                    'title'       => $data['title'],
                    'description' => $data['content'],
                    'url'         => "https://baidu.com",
                    'image'       => "http://49.234.177.104/laravel_weixin/public/".$data['img'],
                ]),
            ];

            $news = new News($items);
            return $news;
        });

        return $app->server->serve();
    }

//    渲染添加页面
    public function createArticle()
    {
        return view('Week2.createArticle');
    }

//    添加数据入库(图片路径)
    public function createArticleDo(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            'img' => 'required',
        ]);

        $path = $request->file('img')->store('uploads');

        $model = new Article();
        $model->title = $request['title'];
        $model->content = $request['content'];
        $model->img = $path;
        $res = $model->save();
        if($res){
            return $this->listArticle();
        }else{
            return $this->createArticle();
        }

    }

//    渲染分页展示
    public function listArticle()
    {
        $model = new Article();
        $data = $model->paginate(5);
        return view('Week2.listArticle',['data'=>$data]);
    }

//    删除功能
    public function delArticle(Request $request)
    {
        $this->validate($request, [
            'id' => 'required',
        ]);
        $id = $request['id'];
        $model = new Article();
        $res = $model->where('id',$id)->delete();
        if($res){
            return $this->listArticle();
        }else{
            return $this->listArticle();
        }
    }

    public function menuArticle()
    {
        $app = app('wechat.official_account.default');
        $buttons = [
            [
                "type" => "click",
                "name" => "找工作",
                "key"  => "V1001_TODAY_MUSIC"
            ],
            [
                "type" => "click",
                "name" => "APP下载",
                "key"  => "V1001_TODAY_MUSIC1"
            ],
            [
                "name"       => "职场必看",
                "sub_button" => [
                    [
                        "type" => "view",
                        "name" => "全国招聘",
                        "url"  => "http://www.soso.com/"
                    ],
                    [
                        "type" => "view",
                        "name" => "免费微课",
                        "url"  => "http://v.qq.com/"
                    ],
                    [
                        "type" => "click",
                        "name" => "求助借款",
                        "key" => "V1001_GOOD"
                    ],
                    [
                        "type" => "click",
                        "name" => "商家合作",
                        "key" => "V1001_GOOD1"
                    ],
                ],
            ],
        ];
        $app->menu->create($buttons);
    }
}