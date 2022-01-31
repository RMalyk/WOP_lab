Вся эта затея, моя попытка перепилить известный пакет

***Easy-webdev-startpack***

на новые рельсы, а именно обеспечить поддержку node v17.* и gulp-sass 5.0.

оригинал находится по адресу [Смотрите](https://github.com/budfy/Easy-webdev-startpack/)

Основные отличия от оригинала:
1. Поддержка актуальной на сегодня версии Node v17.2.0
2. Обеспечена работа задач под gulp-sass v5.0.0
3. Версии модулей обновлены до последних рабочих без поддержки ESM

Далее будет описание, как это все хозяйство установить и запустить. Писать буду как для себя, т.к. это мой первый опыт работы с nodejs, gulp и т.п.

Среда и инструментарий:
1. OS Linux
2. Nodejs / Среда для запуска JavaScript-приложений
3. NVM / Управление версиями Node.js и NPM
4. NPM / Менеджер пакетов. Загрузка и установка пакетов из репозитория nodejs
5. Yarn / Еще один менеджер пакетов. Работает быстрее NPM и выполняет несколько задач параллельно.
6. GIT / Система контроля версий
7. Wget или Curl / Доунлоадеры чаще всего
8. Gulp / это таск-менеджер для автоматического выполнения часто используемых задач 

***Последовательность действий,*** **все действия выполняются в терминале**

1. Устанавливаем `Nvm`. Все действия выполняем от имени локального пользователя НИКАКОГО ***`sudo`*** или ***`root`*** <br />
    `wget -qO- https://raw.githubusercontent.com/nvm-sh/nvm/v0.37.2/install.sh | bash`<br /><br />
    `nvm` будет установлен в СКРЫТУЮ директорию `~/.nvm` чтобы ее увидеть `Ctrl+H`<br />
2. Устанавливаем актуальную версию Nodejs :<br />`nvm install 17.2.0`<br />
3. Проверяем, что все корректно установилось `nvm ls` и `node -v` и `npm -v`<br /> 
4. Устанавливаем Yarn менеджер :<br />`npm install --global yarn`, проверяем `yarn -v`<br />
5. Устанавливаем `gulp` :
  `yarn global add gulp`, проверяем, что все корректно `gulp -v`<br />
Теперь можно выдохнуть, основные компоненты установлены `nodejs`, `gulp` <br />

6. Чтобы не было лишних проблем, очищаем кэш `npm cache clean --force`, `nvm cache clear` <br />

**Создаем копию репозитория она же будет директорией проекта, потом можно переименовать.**

в командной строке терминала:<br />

`git clone https://github.com/Sellato/fork-easy-webdev-startpack-node-v17-gulp-sass-v5.git`<br />
переходим в создавшуюся директорию<br />
`cd fork-easy-webdev-startpack-node-v17-gulp-sass-v5.git`

устанавливаем необходимые модули и обновляем зависимости:<br />
`yarn install`<br /><br />
**Если ошибок нет**, запускаем ваш проект, просто выполните команду<br /><br /> `gulp`

[Как потом управляться со всем этим добром, читаем пост автора сборки](https://habr.com/ru/post/560894/)

[Пошариться в Wiki](https://github.com/Sellato/fork-easy-webdev-startpack-node-v17-gulp-sass-v5/wiki)