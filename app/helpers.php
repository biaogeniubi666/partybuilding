<?php


function ledonoff($id, $led1, $led2, $led3)
{
    if ($led1 ==0 & $led2 ==0 & $led3 ==0) {
        $led1 = 1;
        $led2 = 1;
        $led3 = 1;
    } else {
        $led1 = 0;
        $led2 = 0;
        $led3 = 0;
    }
    $lednew = ['id'=>$id ,'led1'=>$led1, 'led2'=>$led2, 'led3'=>$led3];
    return $lednew;
}


function randomFloat($min = 0, $max = 1) {
    //用于测试，定义一个函数用于生成指定最大最小范围内随机浮点数
    return $min + mt_rand() / mt_getrandmax() * ($max - $min);
}

function socketphp () 
{
    set_time_limit(0); //限制执行时间  0为不限制

    $ip = '172.16.85.52';

    $port = 12346;//端口

    if(($sock = socket_create(AF_INET,SOCK_STREAM,SOL_TCP)) < 0) {
        echo "socket_create() 失败的原因是:".socket_strerror($sock)."\n";
    }

    if(($ret = socket_bind($sock,$ip,$port)) < 0) {
        echo "socket_bind() 失败的原因是:".socket_strerror($ret)."\n";
    }

    if(($ret = socket_listen($sock,4)) < 0) {
        echo "socket_listen() 失败的原因是:".socket_strerror($ret)."\n";
    }
    $count = 0;
    do {
        if (($msgsock = socket_accept($sock)) < 0) {
            echo "socket_accept() failed: reason: " . socket_strerror($msgsock) . "\n";
            break;
        } else {
            //发到客户端
            $msg ="测试成功！\n";
            socket_write($msgsock, $msg, strlen($msg));
            echo "测试成功了啊\n";
            $buf = socket_read($msgsock,8192);
            $talkback = "收到的信息:$buf\n";
            echo $talkback;
            if(++$count >= 5){
                break;
            };
        }
        //echo $buf;
        socket_close($msgsock);
    } while (true);

    socket_close($sock);
}

