<?php

function adminIcon($type) {
    switch ($type) {
        case 'dashboard':
            return 'dashboard';
            break;
        case 'article':
            return 'pencil';
            break;
        case 'page':
            return 'page';
            break;
        case 'forum':
            return 'sticky-note';
            break;
        case 'comment':
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