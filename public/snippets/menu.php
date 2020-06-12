    <div class="menu__header profile">
        <div class="menu__background"></div>
        <h2 class="profile__title">Profile</h2>
        <div class="profile__content">
            <div class="profile__avatar">
                <div class="avatar">
                    <img src="img/portrait.jpg" alt="Markus Schulz"/>
                </div>
            </div>
            <div class="profile__text">
                <h3 class="profile__name">Markus Schulz</h3>
                <div class="profile__location">San Francisco, CA</div>
                <ul class="profile__stats">
                    <li class="profile__statsitem">
                        <span class="stats__label">followers</span>
                        <span class="stats__value"><?= $user_stats['followers']; ?></span>
                    </li>
                    <li class="profile__statsitem">
                        <span class="stats__label">following</span>
                        <span class="stats__value"><?= $user_stats['following']; ?></span>
                    </li>
                </ul>
            </div>

        </div>
    </div>
    <div class="menu__body">
        <ul class="menu__list">
            <li class="menu__item menu__item--playlists is-active">
                <span class="icon"><?php include 'svg/musical-notes-sharp.svg'; ?></span>
                <a href="" class="menu__link">
                    <span class="link__label">Playlists</span>
                    <span class="icon link__icon"><?php include 'svg/chevron_right-24px.svg'; ?></span>
                </a>
            </li>
            <li class="menu__item menu__item--friends">
                <span class="icon"><?php include 'svg/people-sharp.svg'; ?></span>
                <a href="" class="menu__link">
                    <span class="link__label">Friends</span>
                    <span class="icon link__icon"><?php include 'svg/chevron_right-24px.svg'; ?></span>
                </a>
            </li>
            <li class="menu__item menu__item--messages">
                <span class="icon"><?php include 'svg/paper-plane-sharp.svg'; ?></span>
                <a href="" class="menu__link">
                    <span class="link__label">Messages</span>
                    <span class="link__icon"><span class="number">3</span></span>
                </a>
            </li>
            <li class="menu__item menu__item--settings">
                <span class="icon"><?php include 'svg/settings-sharp.svg'; ?></span>
                <a href="" class="menu__link">
                    <span class="link__label">Settings</span>
                    <span class="icon link__icon"><?php include 'svg/chevron_right-24px.svg'; ?></span>
                </a>
            </li>
        </ul>

        <a class="menu__out" href="index.php">
            <span class="icon"><?php include 'svg/log-out-sharp.svg'; ?></span>
            <span>Sign Out</span>
        </a>

    </div>
