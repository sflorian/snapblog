<?php

	//index.php

	require("Post.php");
	require("PostManager.php");

	$unPost = new Post();
	$PostManage = new PostManager();

	$unPost->setId(12);
	$unPost->setPublished(true);
	$unPost->setEmail("yo@yo.com");
	$unPost->setTitle("HelloWorld !");
	$unPost->setContent("Un contenu !");
	$unPost->setUsername("uusernnname");
	$unPost->setDateCreated(date("Y-m-d H:i:s"));
	$unPost->setDateModified(date("Y-m-d H:i:s"));


	//print_r($unPost)
	$PostManager->create($unPost);