<?php

function adminIcon($type) {
    switch ($type) {
        case 'dashboard':
            return 'dashboard';
            break;
        case 'articles':
            return 'pencil';
            break;
        case 'pages':
            return 'page';
            break;
        case 'forums':
            return 'sticky-note';
            break;
        case 'comments':
            return 'comment';
            break;
        case 'users':
            return 'users';
            break;
        default:
            return null;
            break;
    }
}