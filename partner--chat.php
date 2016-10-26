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
								<input type="text" placeholder="Ответить"/>
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
								<input type="text" placeholder="Ответить"/>
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
								<input type="text" placeholder="Ответить"/>
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