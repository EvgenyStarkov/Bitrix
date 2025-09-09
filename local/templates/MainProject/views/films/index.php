
    <form class="filter" action="#" method="post">
        <label class="filter__select-label">
            Сортировать по :
            <select name="orderBy" class="filter__select">
                <option class="filter__option" value="year_desc">Дате добавления</option>
                <option class="filter__option" value="views_desc">Просмотрам</option>
                <option class="filter__option" value="rating_desc">Оценкам</option>
            </select>
        </label>
        <label class="filter__select-label">
            Жанр :
            <select name="genre" class="filter__select">
                <option class="filter__option" value="" selected>Все жанры</option>
                    <option class="filter__option" value="<?= $g['id'] ?>"><?= $g['name'] ?></option>
            </select>
        </label>
        <label class="filter__select-label">
            Год выпуска :
            <select name="year" class="filter__select">
                <option class="filter__option" selected value="">Все года</option>
                    <option class="filter__option" value="<?= $y ?>"><?= $y ?></option>
            </select>
        </label>
        <label class="filter__select-label">
            Страна :
            <select name="country" class="filter__select">
                <option class="filter__option" value="">Все странны</option>
                    <option class="filter__option" value="<?= $ct ?>"><?= $ct ?></option>
            </select>
        </label>
        <button class="button filter__button">Применить</button>
    </form>

    <section class="collections">
    <div class="collections__item">
        <h2 class="collections__item-title h1"> Все фильмы </h2>
        <div class="collections__item-body.grid">
                <form class="collections__item-link" action="video.php" method="post">
                    <button style="background-color: transparent; width: fit-content; height: fit-content; border: none;"
                            value="<?= $fr['id'] ?>" name="filmFakeLink">
                        <img src="<?=  '/' . $fr['cover'] ?>" class="collections__item-link-img" alt="<?= $fr['title'] ?>">
                    </button>
                </form>
        </div>
    </div>
    </section>
