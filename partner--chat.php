<?php require('header.php'); ?>
<?php require('sidebar.php'); ?>
	<div class="page-content">
<h1>Чат</h1>
<div class="tabs">
	<ul class="tabs__header">
		<!-- активна вкладка .tab--active, если нет .tab--active - первая -->
		<li class="tabs__item">
			<a href="#level-1" class="tabs__item-link">Чат 1 уровня</a>
		</li>
		<li class="tabs__item">
			<a href="#level-2" class="tabs__item-link">Чат 2 уровня</a>
		</li>
		<li class="tabs__item">
			<a href="#level-3" class="tabs__item-link">Чат 3 уровня</a>
		</li>
	</ul>
	<div class="chat-form tile-block">
		<div class="tile-block__content">
			<form action="" method="">
				<label class="small-text">Написать сообщение</label>
				<div class="form-grid">
					<div class="field">
						<textarea class="textarea-autoresize"></textarea>
					</div>
					<button class="btn-icon btn-flat btn-photo icon-camera js-toggle" data-toggle-selector="#chat-form--add-picture"></button>
					<button class="btn-icon btn-flat btn-video icon-video-camera js-toggle" data-toggle-selector="#chat-form--add-video"></button>
					<input type="submit" value="Отправить" class="btn">
				</div>
				<div class="highlight-box highlight-box--light chat-form--hidden drop-area" droppable="true" id="chat-form--add-picture">
					<p class="drop-area__drop-text align-center">
						Перетащите файл сюда  или  нажмите кнопку 
						<button class="btn-link btn-upload-file"><input type="file"/>Загрузить файл</button></p>
				</div>
				<div class="highlight-box highlight-box--light chat-form--hidden" id="chat-form--add-video">
					<div class="field success">
						<label class="small-text">Ссылка на файл</label>
						<input type="url" value="http://prntscr.com/arp8n6" />
					</div>
				</div>
			</form>
		</div>
	</div>
	<div class="tabs__content" id="level-1">
		<div class="chat">
			<div class="tile-block chat__item tile-block--chat">
				<div class="tile-block__head">
					<div class="chat__main-message">
						<div class="chat__message-info">
							<div class="chat__user user__info user user--online">
								<div class="user__pic">
									<img src="images/users/user-pic-2.png"/>
								</div>
								<div class="user__name">
									Ольга
									<span class="note small-text light-text">Тюмень</span>
								</div>
							</div>
							<div class="chat__date">
								<span class="date small-text light-text">20.02.2015 12:00</span>
							</div>
						</div>
						<div class="chat__message-content">
							<p>Привет всем новоприбывшим! Добро пожаловать!</p>
						</div>
					</div>
				</div>
				<div class="tile-block__content">
					<div class="chat__answers">
						<div class="chat__answer-message">
							<div class="chat__message-info">
								<div class="chat__user user__info user user--online">
									<div class="user__pic">
										<img src="images/users/user-pic-3.png"/>
									</div>
									<div class="user__name">
										Василиса
										<span class="note small-text light-text">Тюмень</span>
									</div>
								</div>
								<div class="chat__date">
									<span class="date small-text light-text">20.02.2015 12:05</span>
								</div>
							</div>
							<div class="chat__message-content">
								<p>Присоединяюсь!</p>
							</div>
						</div>
						<div class="chat__answer-message">
							<div class="chat__message-info">
								<div class="chat__user user__info user">
									<div class="user__pic">
										<img src="images/users/user-pic-1.png"/>
									</div>
									<div class="user__name">
										   Константин
										<span class="note small-text light-text">Пермь</span>
										<span class="user--moderator-mark smaller-text">Модератор</span>
									</div>
								</div>
								<div class="chat__date">
									<span class="date small-text light-text">20.02.2015 12:11</span>
								</div>
							</div>
							<div class="chat__message-content">
								<p>И я! Добро пожаловать!</p>
							</div>
						</div>
					</div>
					<div class="chat__answer-form">
						<form method="" action="">
							<div class="field">
								<textarea class="textarea-autoresize" placeholder="Ответить"></textarea>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="tile-block chat__item tile-block--chat">
				<div class="tile-block__head">
					<div class="chat__main-message">
						<div class="chat__message-info">
							<div class="chat__user user__info user">
								<div class="user__pic">
									<img src="images/users/user-pic-1.png"/>
								</div>
								<div class="user__name">
									   Константин
									<span class="note small-text light-text">Пермь</span>
									<span class="user--moderator-mark smaller-text">Модератор</span>
								</div>
							</div>
							<div class="chat__date">
								<span class="date small-text light-text">20.02.2015 12:00</span>
							</div>
						</div>
						<div class="chat__message-content">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.</p>
						</div>
					</div>
					<div class="chat__answer-form">
						<form method="" action="">
							<div class="field">
								<textarea class="textarea-autoresize" placeholder="Ответить"></textarea>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="tile-block chat__item tile-block--chat">
				<div class="tile-block__head">
					<div class="chat__main-message">
						<div class="chat__message-info">
							<div class="chat__user user__info user user--online">
								<div class="user__pic">
									<img src="images/users/user-pic-2.png"/>
								</div>
								<div class="user__name">
									Ольга
									<span class="note small-text light-text">Тюмень</span>
								</div>
							</div>
							<div class="chat__date">
								<span class="date small-text light-text">20.02.2015 12:00</span>
							</div>
						</div>
						<div class="chat__message-content">
							<p>Первый заработок с Royal Group - $500!</p>
							<p><img src="images/city.jpg" /></p>
						</div>
					</div>
				</div>
				<div class="tile-block__content">
					<div class="chat__answers">
						<div class="chat__answer-message">
							<div class="chat__message-info">
								<div class="chat__user user__info user user--online">
									<div class="user__pic">
										<img src="images/users/user-pic-3.png"/>
									</div>
									<div class="user__name">
										Василиса
										<span class="note small-text light-text">Тюмень</span>
									</div>
								</div>
								<div class="chat__date">
									<span class="date small-text light-text">20.02.2015 12:05</span>
								</div>
							</div>
							<div class="chat__message-content">
								<p>Присоединяюсь!</p>
							</div>
						</div>
						<div class="chat__answer-message">
							<div class="chat__message-info">
								<div class="chat__user user__info user">
									<div class="user__pic">
										<img src="images/users/user-pic-1.png"/>
									</div>
									<div class="user__name">
										   Константин
										<span class="note small-text light-text">Пермь</span>
										<span class="user--moderator-mark smaller-text">Модератор</span>
									</div>
								</div>
								<div class="chat__date">
									<span class="date small-text light-text">20.02.2015 12:11</span>
								</div>
							</div>
							<div class="chat__message-content">
								<p>И я! Добро пожаловать!</p>
							</div>
						</div>
					</div>
					<div class="chat__answer-form">
						<form method="" action="">
							<div class="field">
								<textarea class="textarea-autoresize" placeholder="Ответить"></textarea>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="tabs__content" id="level-2">
		content here...
	</div>
	<div class="tabs__content" id="level-3">
		content here...
	</div>
</div>
		</div>
<?php require('footer.php'); ?>