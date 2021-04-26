<?php

namespace App\Http\Controllers;

use App\Jobs\NewsParser;
use App\Services\ParserService;

class ParserController extends Controller
{
    public function __invoke(ParserService $service)
    {
        $rssLinks = [
            //'https://news.yandex.ru/auto.rss',
            //'https://news.yandex.ru/auto_racing.rss',
            //'https://news.yandex.ru/army.rss',
            //'https://news.yandex.ru/gadgets.rss',
            //'https://news.yandex.ru/index.rss',
            //'https://news.yandex.ru/martial_arts.rss',
            //'https://news.yandex.ru/communal.rss',
            //'https://news.yandex.ru/health.rss',
            'https://news.yandex.ru/games.rss',
            'https://news.yandex.ru/internet.rss',
            //'https://news.yandex.ru/cyber_sport.rss',
            //'https://news.yandex.ru/movies.rss',
            //'https://news.yandex.ru/cosmos.rss',
            //'https://news.yandex.ru/culture.rss',
            //'https://news.yandex.ru/fire.rss',
            //'https://news.yandex.ru/championsleague.rss',
            //'https://news.yandex.ru/music.rss',
            //'https://news.yandex.ru/nhl.rss',
        ];

            foreach ($rssLinks as $link){
                NewsParser::dispatch($link);
            }

            echo 'Спасибо за обращение';
    }
}
