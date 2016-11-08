<?php

namespace App\Acme;

use Illuminate\Contracts\Support\Jsonable;

class Parser implements Jsonable
{
    protected $slack;
    protected $builder = [];

    public function __construct()
    {
        $this->slack = new Slack\SlackParser;
    }

    public function parse($str)
    {
        $project = '';
        $channel = '';

        if ($str == '') {
            $this->builder['text'] = $this->slack->welcome();
        } else {
            list($commands, $argument) = explode(' ', $str);

            switch ($commands) {
                case 'issues':
                    $this->builder['text'] = $this->slack->issues->all();
                    break;
                case 'issues:create':
                    $this->builder['text'] = $this->slack->issues->create($argument);
                    break;
                case 'issues:close':
                    $this->builder['text'] = $this->slack->issues->create($argument);
                    break;
                default:
                    # code...
                    break;
            }
        }

        // if ($str == '') {
        //     $this->builder['text'] = $this->slack->welcome();
        // } else {
        //     if (preg_match('/--notify/', $str)) {
        //         $this->builder['response_type'] = 'in_channel';
        //     }
        // }

        return $this;
    }

    public function response()
    {
        return $this->builder;
    }

    /**
     * Convert the object to its JSON representation.
     *
     * @param  int  $options
     * @return string
     */
    public function toJson($options = 0)
    {
        return json_encode($this->response());
    }
}
