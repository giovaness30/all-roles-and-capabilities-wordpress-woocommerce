<?php

/* Adiciona nova função de usuário */
function essone_custom_roles(){
    add_role('contributor_essone_lv','Colaborador Loja Virtual', array('read_shop_order' => true,'edit_shop_orders' => true, 'read' => true, 'edit_posts' => true
  ));
  }
  add_action('init','essone_custom_roles');