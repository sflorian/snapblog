<?php

	class Post {

		protected $id;
		protected $title;
		protected $email;
		protected $content;
		protected $username;
		protected $published;
		protected $dateCreated;
		protected $dateModified;






	
			/**
			* Gets the value of id.
			*
			* @return mixed
			*/
			public function getId()
			{
			return $this->id;
			}
			
			/**
			* Sets the value of id.
			*
			* @param mixed $id the id
			*
			* @return self
			*/
			public function setId($id)
			{
			$this->id           = $id;
			
			return $this;
			}
			
			/**
			* Gets the value of title.
			*
			* @return mixed
			*/
			public function getTitle()
			{
			return $this->title;
			}
			
			/**
			* Sets the value of title.
			*
			* @param mixed $title the title
			*
			* @return self
			*/
			public function setTitle($title)
			{
			$this->title        = $title;
			
			return $this;
			}
			
			/**
			* Gets the value of email.
			*
			* @return mixed
			*/
			public function getEmail()
			{
			return $this->email;
			}
			
			/**
			* Sets the value of email.
			*
			* @param mixed $email the email
			*
			* @return self
			*/
			public function setEmail($email)
			{
			$this->email        = $email;
			
			return $this;
			}
			
			/**
			* Gets the value of content.
			*
			* @return mixed
			*/
			public function getContent()
			{
			return $this->content;
			}
			
			/**
			* Sets the value of content.
			*
			* @param mixed $content the content
			*
			* @return self
			*/
			public function setContent($content)
			{
			$this->content      = $content;
			
			return $this;
			}
			
			/**
			* Gets the value of username.
			*
			* @return mixed
			*/
			public function getUsername()
			{
			return $this->username;
			}
			
			/**
			* Sets the value of username.
			*
			* @param mixed $username the username
			*
			* @return self
			*/
			public function setUsername($username)
			{
			$this->username     = $username;
			
			return $this;
			}
			
			/**
			* Gets the value of published.
			*
			* @return mixed
			*/
			public function getPublished()
			{
			return $this->published;
			}
			
			/**
			* Sets the value of published.
			*
			* @param mixed $published the published
			*
			* @return self
			*/
			public function setPublished($published)
			{
			$this->published    = $published;
			
			return $this;
			}
			
			/**
			* Gets the value of dateCreated.
			*
			* @return mixed
			*/
			public function getDateCreated()
			{
			return $this->dateCreated;
			}
			
			/**
			* Sets the value of dateCreated.
			*
			* @param mixed $dateCreated the date created
			*
			* @return self
			*/
			public function setDateCreated($dateCreated)
			{
			$this->dateCreated  = $dateCreated;
			
			return $this;
			}
			
			/**
			* Gets the value of dateModified.
			*
			* @return mixed
			*/
			public function getDateModified()
			{
			return $this->dateModified;
			}
			
			/**
			* Sets the value of dateModified.
			*
			* @param mixed $dateModified the date modified
			*
			* @return self
			*/
			public function setDateModified($dateModified)
			{
			$this->dateModified = $dateModified;
			
			return $this;
			}
}