<?php

function permission(){
    $ci = get_instance();
    $loggedUser = $ci->session->userdata("logged_user");

    if(!$loggedUser)
    {
        $ci->session->flashdata("danger", "Você precisa estar logado para acessar esta página");
        redirect("login");
    }

    return $loggedUser;
}