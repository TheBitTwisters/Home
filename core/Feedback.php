<?php

namespace Home;

class Feedback
{

    public static function create($context, $message, $title=false)
    {
        return [
            'context' => $context,
            'message' => $message,
            'title' => $title
        ];
    }

}
