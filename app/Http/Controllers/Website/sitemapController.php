<?php

namespace App\Http\Controllers\Website;

use App\categories;
use App\channels;
use App\Http\Controllers\admin\helper\helperController;
use App\siteMap;
use App\videos;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use View;
use Response;


class sitemapController extends Controller
{
    public static function create_sitemap(Request $request)
    {
        ////// delete old data.
        // siteMap::truncate();
        // File::deleteDirectory('/home/egyptvision/public_html/mini-youtube.com/sitemap');

        ///////// create videos sitemaps
        $path = '/home/egyptvision/public_html/mini-youtube.com/sitemap';

        if (!File::isDirectory($path))
        {
          File::makeDirectory($path, 0777, true, true);
        }

        $sitemap_id = siteMap::orderByDesc('id')->first();
        $sitemap_video_id = siteMap::where('video_id','<>','')->orderBy('id', 'desc')->first();

        if (isset($sitemap_id) && $sitemap_id !='')
        {
            $video = videos::where('id','>', $sitemap_video_id->video_id)->where('status', '=', 1)->skip(0)->take(4000)->orderby('id','asc')->get()->toArray();
        }
        else{
            $video = videos::where('status', '=', 1)->skip(0)->take(4000)->orderby('id','asc')->get()->toArray();
        }

        $videos = array_chunk($video, 400);
        $count_arrays=count($videos);
        
        for ($i=0; $i < $count_arrays; $i++)
        {
          $sitemap = siteMap::count();
          $count = $sitemap + 1 ;
          $name = 'sitemap_'.$count.'.xml';

          $videos_sitemap = '<?xml version="1.0" encoding="UTF-8"?>';
          $videos_sitemap .= '<?xml-stylesheet type="text/xsl" href="https://www.mini-youtube.com/public/css/sitemap_css/main-sitemap.xsl"?>';
          $videos_sitemap .= '<urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:image="http://www.google.com/schemas/sitemap-image/1.1" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd http://www.google.com/schemas/sitemap-image/1.1 http://www.google.com/schemas/sitemap-image/1.1/sitemap-image.xsd" xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

          foreach ($videos[$i] as $vid)
          {
            $replaced_title = helperController::make_slug($vid['title']);
            $videos_sitemap .= '<url>';
            $videos_sitemap .= '<loc>https://www.mini-youtube.com/video/'.$vid['id'].'/'.$replaced_title.'</loc>';
            $videos_sitemap .= '<changefreq>monthly</changefreq>';
            $videos_sitemap .= '<priority>0.8</priority>';
//            $videos_sitemap .= ' <image:image>';
//            $videos_sitemap .= '   <image:loc>https://www.mini-youtube.com/img/video/'.$vid['image'].'</image:loc>';
//            $videos_sitemap .= '   <image:caption><![CDATA[mini-youtube.com]]></image:caption>';
//            $videos_sitemap .= '   </image:image>';
            $videos_sitemap .= '</url>';
          }

          $videos_sitemap .= '</urlset>';

          File::put('/home/egyptvision/public_html/mini-youtube.com/sitemap/'.$name, $videos_sitemap);

          $insert_map = new siteMap;
          $insert_map -> file_name = $name;
          $insert_map -> video_id = $vid['id'];
          $insert_map -> save();
        }

        ////////// create category sitemaps
        $path = '/home/egyptvision/public_html/mini-youtube.com/sitemap';

        if (!File::isDirectory($path))
        {
          File::makeDirectory($path, 0777, true, true);
        }

        $sitemap_category_id = siteMap::where('category_id','<>','')->orderBy('id', 'desc')->first();

        if (isset($sitemap_category_id) && $sitemap_category_id !='')
        {
            $category = categories::where('id','>', $sitemap_category_id->category_id)->skip(0)->take(4000)->orderBy('id','asc')->get()->toArray();
        }
        else{
            $category = categories::skip(0)->take(4000)->orderBy('id','asc')->get()->toArray();
        }

        $cats = array_chunk($category, 2000);
        $count_arrays_cat=count($cats);

        for ($i=0; $i < $count_arrays_cat; $i++)
        {
          $sitemap = siteMap::count();
          $count = $sitemap + 1 ;
          $name = 'sitemap_'.$count.'.xml';

          $category_sitemap = '<?xml version="1.0" encoding="UTF-8"?>';
          $category_sitemap .= '<?xml-stylesheet type="text/xsl" href="https://www.mini-youtube.com/public/css/sitemap_css/main-sitemap.xsl"?>';
          $category_sitemap .= '<urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:image="http://www.google.com/schemas/sitemap-image/1.1" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd http://www.google.com/schemas/sitemap-image/1.1 http://www.google.com/schemas/sitemap-image/1.1/sitemap-image.xsd" xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

          foreach ($cats[$i] as $cat)
          {
            $replaced_title = helperController::make_slug($cat['title']);

            $category_sitemap .= "<url>";
            $category_sitemap .= " <loc>https://www.mini-youtube.com/category/".$cat['id']."/".$replaced_title."</loc>";
            $category_sitemap .= " <changefreq>monthly</changefreq>";
            $category_sitemap .= " <priority>0.8</priority>";
//            $category_sitemap .= " <image:image>";
//            $category_sitemap .= "  <image:loc>https://www.mini-youtube.com/website/images/category/".$cat['image']."</image:loc>";
//            $category_sitemap .= "  <image:caption><![CDATA[mini-youtube.com]]></image:caption>";
//            $category_sitemap .= " </image:image>";
            $category_sitemap .= "</url>";
          }

          $category_sitemap .= '</urlset>';

          File::put('/home/egyptvision/public_html/mini-youtube.com/sitemap/'.$name, $category_sitemap);

          $insert_map = new siteMap;
          $insert_map -> file_name = $name;
          $insert_map -> category_id = $cat['id'];
          $insert_map -> save();
        }

        ////////// create single_channel sitemaps
        $path = '/home/egyptvision/public_html/mini-youtube.com/sitemap';

        if (!File::isDirectory($path))
        {
          File::makeDirectory($path, 0777, true, true);
        }

        $sitemap_channel_id = siteMap::where('channel_id','<>','')->orderBy('id', 'desc')->first();

        if (isset($sitemap_channel_id) && $sitemap_channel_id !='')
        {
            $channels = channels::where('status','=', 1)->where('id','>', $sitemap_channel_id->channel_id)->skip(0)->take(4000)->orderBy('id','asc')->get()->toArray();
        }
        else{
            $channels = channels::where('status','=', 1)->skip(0)->take(4000)->orderBy('id','asc')->get()->toArray();
        }

        $chs = array_chunk($channels, 2000);
        $count_arrays_channel=count($chs);

        for ($i=0; $i < $count_arrays_channel; $i++)
        {
          $sitemap = siteMap::count();
          $count = $sitemap + 1 ;
          $name = 'sitemap_'.$count.'.xml';

          $channel_sitemap = '<?xml version="1.0" encoding="UTF-8"?>';
          $channel_sitemap .= '<?xml-stylesheet type="text/xsl" href="https://www.mini-youtube.com/public/css/sitemap_css/main-sitemap.xsl"?>';
          $channel_sitemap .= '<urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:image="http://www.google.com/schemas/sitemap-image/1.1" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd http://www.google.com/schemas/sitemap-image/1.1 http://www.google.com/schemas/sitemap-image/1.1/sitemap-image.xsd" xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

          foreach ($chs[$i] as $ch)
          {
            $replaced_title = helperController::make_slug($ch['name']);

            $channel_sitemap .= "<url>";
            $channel_sitemap .= " <loc>https://www.mini-youtube.com/single_channel/".$ch['id']."/$replaced_title</loc>";
            $channel_sitemap .= " <changefreq>monthly</changefreq>";
            $channel_sitemap .= " <priority>0.8</priority>";
//            $channel_sitemap .= " <image:image>";
//            $channel_sitemap .= "  <image:loc>https://www.mini-youtube.com/public/img/channel/".$ch['logo']."</image:loc>";
//            $channel_sitemap .= "  <image:caption><![CDATA[mini-youtube.com]]></image:caption>";
//            $channel_sitemap .= " </image:image>";
            $channel_sitemap .= "</url>";
          }

          $channel_sitemap .= '</urlset>';

          File::put('/home/egyptvision/public_html/mini-youtube.com/sitemap/'.$name, $channel_sitemap);

          $insert_map = new siteMap;
          $insert_map -> file_name = $name;
          $insert_map -> channel_id = $ch['id'];
          $insert_map -> save();
        }

      return "done";
    }

    ////////////////////////////////////////////////////////////////
    public function index(Request $request)
    {
        ////////// create index file.
        $sitemap = siteMap::all();

        $index = '<?xml version="1.0" encoding="UTF-8"?>';
        $index .= '<?xml-stylesheet type="text/xsl" href="https://www.mini-youtube.com/public/css/sitemap_css/main-sitemap.xsl"?>';
        $index .= '<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

        foreach($sitemap as $maps)
        {
            $index .= '<sitemap>';
            $index .= '<loc>https://www.mini-youtube.com/sitemap/'.$maps->file_name.'</loc>';
            $index .= '</sitemap>';
        }

        $index .= '</sitemapindex>';

        $response = Response::make($index);
        $response->header('Content-Type', 'text/xml');
        return $response;
    }

    public function view_sitemap(Request $request, $name)
    {
      $sitemap = siteMap::where('file_name', '=', $request->name)->first();

      if (isset($sitemap->file_name) && $sitemap->file_name !='')
      {
        return response(file_get_contents('/home/egyptvision/public_html/mini-youtube.com/sitemap/'.$sitemap->file_name), 200, [
            'Content-Type' => 'application/xml'
        ]);
      }
      else{ return redirect('/'); }

    }

    public function allLinks(Request $request)
    {
        $all = channels::select('id','name')->where('id', '>', '30000')->where('id', '<', '40001')->get();
        foreach ($all as $video)
        {
            echo 'https://www.mini-youtube.com/single_channel/'.$video->id.'/'.helperController::make_slug($video->name);
            echo '<br>';
        }
    }

}
