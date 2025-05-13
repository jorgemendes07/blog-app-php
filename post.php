<?php
    include_once('./templates/header.php');

    if(isset($_GET['id'])) {
        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post) {
            if($post['id'] == $postId) {
                $currentPost = $post;
            }
        }
    }
?>

<main id="post-container">
    <div id="content-container">
        <h1 id="main-title"><?= $currentPost['title'] ?></h1>
        <p><?= $currentPost['description'] ?></p>
        <div class="img-container">
            <img src="<?= $BASE_URL ?>images/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
        </div>
        <p><?= $currentPost['content'] ?></p>
    </div>
</main>

<?php
    include_once('./templates/footer.php');
?>