!!!
%html(xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en")
	%head
		/blueprint CSS framework
		%meta(http-equiv="Content-Type" content="text/html; charset=utf-8")
		%meta(name="language" content="en")
		%link(rel="stylesheet" type="text/css" href="#{Yii::app()->request->baseUrl}/css/screen.css" media="screen, projection" )
		%link(rel="stylesheet" type="text/css" href="#{Yii::app()->request->baseUrl}/css/print.css" media="print")
		/[if lt IE 8]
			%link(rel="stylesheet" type="text/css" href="#{Yii::app()->request->baseUrl}/css/ie.css" media="screen, projection" )
		%link(rel="stylesheet" type="text/css" href="#{Yii::app()->request->baseUrl}/css/main.css")
		%link(rel="stylesheet" type="text/css" href="#{Yii::app()->request->baseUrl}/css/form.css")
		%title= CHtml::encode($this->pageTitle)
	/head
	%body
		.container#page
			#header
				#logo= CHtml::encode(Yii::app()->name)
			/header
			//#mainmenu
				:php
					$this->widget('bootstrap.widgets.TbNavbar', array(
						'brand' => Yii::t('lang_uk', 'Home'),
						//'brandUrl' => '#',
						'fixed' => false,
						'type' => 'inverse',
						'items' => array(
							array(
								'class' => 'bootstrap.widgets.TbMenu',
								'items' => array(
									array('label'=>'Первая', 'url'=>'/site/index'),
									array('label'=>Yii::t('lang_uk', 'Notes'), 'url'=>array('/note')),
									array('label'=>Yii::t('lang_uk', 'Login'), 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
									array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
									array('label'=>'Admin', 'url'=>array('/admin'), 'visible'=>!Yii::app()->user->isGuest),
									array(
										'label' => 'Dropdown',
										'url' => '#',
										'items' => array(
											array('label' => 'Action', 'url' => '#'),
											array('label' => 'Another action', 'url' => '#'),
											array('label' => 'Something else here', 'url' => '#'),
											'---',
											array('label' => 'NAV HEADER'),
											array('label' => 'Separated link', 'url' => '#'),
											array('label' => 'One more separated link', 'url' => '#'),
										)
									),
								)
							)
						)
					));
					// $this->widget('zii.widgets.CMenu',array(
					// 	'items'=>array(
					// 		array('label'=>Yii::t('lang_uk', 'Home'), 'url'=>array('/site/index')),
					// 		array('label'=>'Contact', 'url'=>array('/site/contact')),
					// 		array('label'=>Yii::t('lang_uk', 'Notes'), 'url'=>array('/note')),
					// 		array('label'=>Yii::t('lang_uk', 'Create'), 'url'=>array('/note/create')),
					// 		array('label'=>Yii::t('lang_uk', 'Login'), 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
					// 		array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
					// 	),
					// ));
			/mainmenu
			.row
				.span12
					- if(isset($this->breadcrumbs))
						-	$this->widget('bootstrap.widgets.TbBreadcrumbs',array('links'=>$this->breadcrumbs))
			= $content
			.clear
			#footer
				Copyright &copy; #{date('Y')} by My Company.
				%br
				All Rights Reserved.
				%br
				= Yii::powered()
			/footer
		/page
	/body
/html
