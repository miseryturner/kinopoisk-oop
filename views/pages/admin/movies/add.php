<?php
/**
 * @var \App\Kernel\View\View $view
 */
?>

<?php $view->component('header') ?>

    add movie page

    <form action="/admin/movies/add" method="post">
        <p>Name</p>
        <div>
            <input type="text" name="name">
        </div>
        <div>
            <button type="submit">Add</button>
        </div>
    </form>

<?php $view->component('footer') ?>