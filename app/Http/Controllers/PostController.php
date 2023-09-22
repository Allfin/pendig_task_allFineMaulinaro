<?php

namespace App\Http\Controllers;

class PostController extends Controller
{
  public function index()
  {
    $posts =  [
      [
        "title" => "Title Pertama",
        "slug" => "title-pertama",
        'excerpt' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum enim, repellat autem voluptate quia reiciendis temporibus laudantium officia modi non dolore! Sequi doloremque est esse dolorem aperiam eum fugiat aut voluptatum omnis amet nesciunt praesentium distinctio odit quibusdam, magni atque perferendis quisquam vel voluptatibus! Quos voluptas distinctio provident cum totam suscipit exercitationem modi dolore itaque. Sit consectetur vel aliquam itaque illum magni, nisi quas ipsa molestiae accusamus ut pariatur possimus repellat natus minima esse? Sit eos ipsam earum deleniti corrupti.",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum enim, repellat autem voluptate quia reiciendis temporibus laudantium officia modi non dolore! Sequi doloremque est esse dolorem aperiam eum fugiat aut voluptatum omnis amet nesciunt praesentium distinctio odit quibusdam, magni atque perferendis quisquam vel voluptatibus! Quos voluptas distinctio provident cum totam suscipit exercitationem modi dolore itaque. Sit consectetur vel aliquam itaque illum magni, nisi quas ipsa molestiae accusamus ut pariatur possimus repellat natus minima esse? Sit eos ipsam earum deleniti corrupti. Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum enim, repellat autem voluptate quia reiciendis temporibus laudantium officia modi non dolore! Sequi doloremque est esse dolorem aperiam eum fugiat aut voluptatum omnis amet nesciunt praesentium distinctio odit quibusdam, magni atque perferendis quisquam vel voluptatibus! Quos voluptas distinctio provident cum totam suscipit exercitationem modi dolore itaque. Sit consectetur vel aliquam itaque illum magni, nisi quas ipsa molestiae accusamus ut pariatur possimus repellat natus minima esse? Sit eos ipsam earum deleniti corrupti."
      ],
      [
        "title" => "Title Kedua",
        "slug" => "title-kedua",
        'excerpt' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum enim, repellat autem voluptate quia reiciendis temporibus laudantium officia modi non dolore! Sequi doloremque est esse dolorem aperiam eum fugiat aut voluptatum omnis amet nesciunt praesentium distinctio odit quibusdam, magni atque perferendis quisquam vel voluptatibus! Quos voluptas distinctio provident cum totam suscipit exercitationem modi dolore itaque. Sit consectetur vel aliquam itaque illum magni, nisi quas ipsa molestiae accusamus ut pariatur possimus repellat natus minima esse? Sit eos ipsam earum deleniti corrupti.",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum enim, repellat autem voluptate quia reiciendis temporibus laudantium officia modi non dolore! Sequi doloremque est esse dolorem aperiam eum fugiat aut voluptatum omnis amet nesciunt praesentium distinctio odit quibusdam, magni atque perferendis quisquam vel voluptatibus! Quos voluptas distinctio provident cum totam suscipit exercitationem modi dolore itaque. Sit consectetur vel aliquam itaque illum magni, nisi quas ipsa molestiae accusamus ut pariatur possimus repellat natus minima esse? Sit eos ipsam earum deleniti corrupti. Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum enim, repellat autem voluptate quia reiciendis temporibus laudantium officia modi non dolore! Sequi doloremque est esse dolorem aperiam eum fugiat aut voluptatum omnis amet nesciunt praesentium distinctio odit quibusdam, magni atque perferendis quisquam vel voluptatibus! Quos voluptas distinctio provident cum totam suscipit exercitationem modi dolore itaque. Sit consectetur vel aliquam itaque illum magni, nisi quas ipsa molestiae accusamus ut pariatur possimus repellat natus minima esse? Sit eos ipsam earum deleniti corrupti."
      ],
      [
        "title" => "Title Ketiga",
        "slug" => "title-ketiga",
        'excerpt' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum enim, repellat autem voluptate quia reiciendis temporibus laudantium officia modi non dolore! Sequi doloremque est esse dolorem aperiam eum fugiat aut voluptatum omnis amet nesciunt praesentium distinctio odit quibusdam, magni atque perferendis quisquam vel voluptatibus! Quos voluptas distinctio provident cum totam suscipit exercitationem modi dolore itaque. Sit consectetur vel aliquam itaque illum magni, nisi quas ipsa molestiae accusamus ut pariatur possimus repellat natus minima esse? Sit eos ipsam earum deleniti corrupti.",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum enim, repellat autem voluptate quia reiciendis temporibus laudantium officia modi non dolore! Sequi doloremque est esse dolorem aperiam eum fugiat aut voluptatum omnis amet nesciunt praesentium distinctio odit quibusdam, magni atque perferendis quisquam vel voluptatibus! Quos voluptas distinctio provident cum totam suscipit exercitationem modi dolore itaque. Sit consectetur vel aliquam itaque illum magni, nisi quas ipsa molestiae accusamus ut pariatur possimus repellat natus minima esse? Sit eos ipsam earum deleniti corrupti. Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum enim, repellat autem voluptate quia reiciendis temporibus laudantium officia modi non dolore! Sequi doloremque est esse dolorem aperiam eum fugiat aut voluptatum omnis amet nesciunt praesentium distinctio odit quibusdam, magni atque perferendis quisquam vel voluptatibus! Quos voluptas distinctio provident cum totam suscipit exercitationem modi dolore itaque. Sit consectetur vel aliquam itaque illum magni, nisi quas ipsa molestiae accusamus ut pariatur possimus repellat natus minima esse? Sit eos ipsam earum deleniti corrupti."
      ],
    ];
    return view('posts', [
      "title" => "Post",
      "posts" => $posts
    ]);
  }
  public function show($slug)
  {
    $posts =  [
      [
        "title" => "Title Pertama",
        "slug" => "title-pertama",
        'excerpt' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum enim, repellat autem voluptate quia reiciendis temporibus laudantium officia modi non dolore! Sequi doloremque est esse dolorem aperiam eum fugiat aut voluptatum omnis amet nesciunt praesentium distinctio odit quibusdam, magni atque perferendis quisquam vel voluptatibus! Quos voluptas distinctio provident cum totam suscipit exercitationem modi dolore itaque. Sit consectetur vel aliquam itaque illum magni, nisi quas ipsa molestiae accusamus ut pariatur possimus repellat natus minima esse? Sit eos ipsam earum deleniti corrupti.",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum enim, repellat autem voluptate quia reiciendis temporibus laudantium officia modi non dolore! Sequi doloremque est esse dolorem aperiam eum fugiat aut voluptatum omnis amet nesciunt praesentium distinctio odit quibusdam, magni atque perferendis quisquam vel voluptatibus! Quos voluptas distinctio provident cum totam suscipit exercitationem modi dolore itaque. Sit consectetur vel aliquam itaque illum magni, nisi quas ipsa molestiae accusamus ut pariatur possimus repellat natus minima esse? Sit eos ipsam earum deleniti corrupti. Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum enim, repellat autem voluptate quia reiciendis temporibus laudantium officia modi non dolore! Sequi doloremque est esse dolorem aperiam eum fugiat aut voluptatum omnis amet nesciunt praesentium distinctio odit quibusdam, magni atque perferendis quisquam vel voluptatibus! Quos voluptas distinctio provident cum totam suscipit exercitationem modi dolore itaque. Sit consectetur vel aliquam itaque illum magni, nisi quas ipsa molestiae accusamus ut pariatur possimus repellat natus minima esse? Sit eos ipsam earum deleniti corrupti."
      ],
      [
        "title" => "Title Kedua",
        "slug" => "title-kedua",
        'excerpt' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum enim, repellat autem voluptate quia reiciendis temporibus laudantium officia modi non dolore! Sequi doloremque est esse dolorem aperiam eum fugiat aut voluptatum omnis amet nesciunt praesentium distinctio odit quibusdam, magni atque perferendis quisquam vel voluptatibus! Quos voluptas distinctio provident cum totam suscipit exercitationem modi dolore itaque. Sit consectetur vel aliquam itaque illum magni, nisi quas ipsa molestiae accusamus ut pariatur possimus repellat natus minima esse? Sit eos ipsam earum deleniti corrupti.",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum enim, repellat autem voluptate quia reiciendis temporibus laudantium officia modi non dolore! Sequi doloremque est esse dolorem aperiam eum fugiat aut voluptatum omnis amet nesciunt praesentium distinctio odit quibusdam, magni atque perferendis quisquam vel voluptatibus! Quos voluptas distinctio provident cum totam suscipit exercitationem modi dolore itaque. Sit consectetur vel aliquam itaque illum magni, nisi quas ipsa molestiae accusamus ut pariatur possimus repellat natus minima esse? Sit eos ipsam earum deleniti corrupti. Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum enim, repellat autem voluptate quia reiciendis temporibus laudantium officia modi non dolore! Sequi doloremque est esse dolorem aperiam eum fugiat aut voluptatum omnis amet nesciunt praesentium distinctio odit quibusdam, magni atque perferendis quisquam vel voluptatibus! Quos voluptas distinctio provident cum totam suscipit exercitationem modi dolore itaque. Sit consectetur vel aliquam itaque illum magni, nisi quas ipsa molestiae accusamus ut pariatur possimus repellat natus minima esse? Sit eos ipsam earum deleniti corrupti."
      ],
      [
        "title" => "Title Ketiga",
        "slug" => "title-ketiga",
        'excerpt' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum enim, repellat autem voluptate quia reiciendis temporibus laudantium officia modi non dolore! Sequi doloremque est esse dolorem aperiam eum fugiat aut voluptatum omnis amet nesciunt praesentium distinctio odit quibusdam, magni atque perferendis quisquam vel voluptatibus! Quos voluptas distinctio provident cum totam suscipit exercitationem modi dolore itaque. Sit consectetur vel aliquam itaque illum magni, nisi quas ipsa molestiae accusamus ut pariatur possimus repellat natus minima esse? Sit eos ipsam earum deleniti corrupti.",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum enim, repellat autem voluptate quia reiciendis temporibus laudantium officia modi non dolore! Sequi doloremque est esse dolorem aperiam eum fugiat aut voluptatum omnis amet nesciunt praesentium distinctio odit quibusdam, magni atque perferendis quisquam vel voluptatibus! Quos voluptas distinctio provident cum totam suscipit exercitationem modi dolore itaque. Sit consectetur vel aliquam itaque illum magni, nisi quas ipsa molestiae accusamus ut pariatur possimus repellat natus minima esse? Sit eos ipsam earum deleniti corrupti. Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum enim, repellat autem voluptate quia reiciendis temporibus laudantium officia modi non dolore! Sequi doloremque est esse dolorem aperiam eum fugiat aut voluptatum omnis amet nesciunt praesentium distinctio odit quibusdam, magni atque perferendis quisquam vel voluptatibus! Quos voluptas distinctio provident cum totam suscipit exercitationem modi dolore itaque. Sit consectetur vel aliquam itaque illum magni, nisi quas ipsa molestiae accusamus ut pariatur possimus repellat natus minima esse? Sit eos ipsam earum deleniti corrupti."
      ],
    ];
    $singlePost = [];
    foreach ($posts as $post) {
      if ($post['slug'] === $slug) {
        $singlePost = $post;
      }
    }
    return view('post', [
      "title" => "Post",
      'post' =>  $singlePost
    ]);
  }
}
