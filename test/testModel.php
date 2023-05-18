<?php

require_once __DIR__ . "/../Model/Users.php";

use Model\Users;


function show()
{
  Users::show();
  foreach (Users::show() as $user) : ?>
    <tr>ID:<?= $user["user_id"]; ?> Name: <?= $user["user_name"]; ?></tr>
<?php
  endforeach;
}

function add()
{
  $cubs[] = [
    "user_name" => "Normah Che Awang",
    "user_number" => "01111223366",
    "user_age" => "29"
  ];
  $cubs[] = [
    "user_name" => "ahmad albab",
    "user_number" => "01111223366",
    "user_age" => "29"
  ];
  $cubs[] = [
    "user_name" => "Akhmal Azim",
    "user_number" => "01111223366",
    "user_age" => "29"
  ];
  $cubs[] = [
    "user_name" => "khairul Azim",
    "user_number" => "01111223366",
    "user_age" => "29"
  ];
  $cubs[] = [
    "user_name" => "Azman Jailani",
    "user_number" => "01111223366",
    "user_age" => "29"
  ];
  $cubs[] = [
    "user_name" => "Siti Aishah",
    "user_number" => "01111223366",
    "user_age" => "29"
  ];
  $cubs[] = [
    "user_name" => "Aiman Tino",
    "user_number" => "01111223366",
    "user_age" => "29"
  ];
  Users::create($cubs);
  show();
}

function edit()
{
  $data = [
    "user_name" => "Shaza"
  ];

  Users::update($data, 5);
  show();
}

function delete()
{
  $id = [33, 34];
  Users::destroy($id);
  show();
}

delete();
