<?php
include_once ("templates/header.php");

if(isset($_GET['id'])) {

    $postId = $_GET['id'];
    $currentPost;
    foreach($posts as $post){
    if($post['id'] == $postId){
        $currentPost = $post;
    }
 }
}
?>
<main id="post-container">
    <div class="content-container">
        <h1 id="main-title"><?= $currentPost['title'] ?></h1>
        <p id="post-description"><?= $currentPost['description'] ?></p>
        <div class="img-container">
            <img src="<?=$BASE_URL ?>img/<?= $currentPost['img'] ?>" alt="<?=$current['title']?>">
        </div>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam recusandae in voluptatem id laboriosam, nam nesciunt aspernatur corrupti veniam ipsum similique earum ea quaerat odit numquam impedit perspiciatis natus ab?
        Voluptates quidem assumenda, eligendi rerum impedit repellat suscipit eum delectus accusantium quaerat blanditiis et hic voluptatem numquam animi, labore voluptatibus mollitia quae quisquam dolor sint. Aperiam eius quam delectus praesentium?
        Fuga nesciunt ipsa tempore cumque in quasi, porro vero eum praesentium voluptatibus rem harum repellat hic perferendis suscipit laboriosam dolor commodi illo ea! Vero sint explicabo quia temporibus exercitationem consequatur.
        Velit ratione, sunt aut facilis magni repudiandae? Aperiam ipsa assumenda ut, repellendus minus sunt. Recusandae omnis accusantium consequuntur quae eum quis eaque enim nemo necessitatibus dignissimos, officiis veniam, fuga eveniet.
        Fuga quidem animi fugiat, at consequatur corrupti distinctio deleniti. Quibusdam qui, molestias eveniet minima eligendi maxime dolores non earum rerum et quod consectetur ipsam voluptatibus doloribus voluptas iure fuga maiores.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam recusandae in voluptatem id laboriosam, nam nesciunt aspernatur corrupti veniam ipsum similique earum ea quaerat odit numquam impedit perspiciatis natus ab?
        Voluptates quidem assumenda, eligendi rerum impedit repellat suscipit eum delectus accusantium quaerat blanditiis et hic voluptatem numquam animi, labore voluptatibus mollitia quae quisquam dolor sint. Aperiam eius quam delectus praesentium?
        Fuga nesciunt ipsa tempore cumque in quasi, porro vero eum praesentium voluptatibus rem harum repellat hic perferendis suscipit laboriosam dolor commodi illo ea! Vero sint explicabo quia temporibus exercitationem consequatur.
        Velit ratione, sunt aut facilis magni repudiandae? Aperiam ipsa assumenda ut, repellendus minus sunt. Recusandae omnis accusantium consequuntur quae eum quis eaque enim nemo necessitatibus dignissimos, officiis veniam, fuga eveniet.
        Fuga quidem animi fugiat, at consequatur corrupti distinctio deleniti. Quibusdam qui, molestias eveniet minima eligendi maxime dolores non earum rerum et quod consectetur ipsam voluptatibus doloribus voluptas iure fuga maiores.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam recusandae in voluptatem id laboriosam, nam nesciunt aspernatur corrupti veniam ipsum similique earum ea quaerat odit numquam impedit perspiciatis natus ab?
        Voluptates quidem assumenda, eligendi rerum impedit repellat suscipit eum delectus accusantium quaerat blanditiis et hic voluptatem numquam animi, labore voluptatibus mollitia quae quisquam dolor sint. Aperiam eius quam delectus praesentium?
        Fuga nesciunt ipsa tempore cumque in quasi, porro vero eum praesentium voluptatibus rem harum repellat hic perferendis suscipit laboriosam dolor commodi illo ea! Vero sint explicabo quia temporibus exercitationem consequatur.
        Velit ratione, sunt aut facilis magni repudiandae? Aperiam ipsa assumenda ut, repellendus minus sunt. Recusandae omnis accusantium consequuntur quae eum quis eaque enim nemo necessitatibus dignissimos, officiis veniam, fuga eveniet.
        Fuga quidem animi fugiat, at consequatur corrupti distinctio deleniti. Quibusdam qui, molestias eveniet minima eligendi maxime dolores non earum rerum et quod consectetur ipsam voluptatibus doloribus voluptas iure fuga maiores.
        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam recusandae in voluptatem id laboriosam, nam nesciunt aspernatur corrupti veniam ipsum similique earum ea quaerat odit numquam impedit perspiciatis natus ab?
        Voluptates quidem assumenda, eligendi rerum impedit repellat suscipit eum delectus accusantium quaerat blanditiis et hic voluptatem numquam animi, labore voluptatibus mollitia quae quisquam dolor sint. Aperiam eius quam delectus praesentium?
        Fuga nesciunt ipsa tempore cumque in quasi, porro vero eum praesentium voluptatibus rem harum repellat hic perferendis suscipit laboriosam dolor commodi illo ea! Vero sint explicabo quia temporibus exercitationem consequatur.
        Velit ratione, sunt aut facilis magni repudiandae? Aperiam ipsa assumenda ut, repellendus minus sunt. Recusandae omnis accusantium consequuntur quae eum quis eaque enim nemo necessitatibus dignissimos, officiis veniam, fuga eveniet.
        Fuga quidem animi fugiat, at consequatur corrupti distinctio deleniti. Quibusdam qui, molestias eveniet minima eligendi maxime dolores non earum rerum et quod consectetur ipsam voluptatibus doloribus voluptas iure fuga maiores.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam recusandae in voluptatem id laboriosam, nam nesciunt aspernatur corrupti veniam ipsum similique earum ea quaerat odit numquam impedit perspiciatis natus ab?
        Voluptates quidem assumenda, eligendi rerum impedit repellat suscipit eum delectus accusantium quaerat blanditiis et hic voluptatem numquam animi, labore voluptatibus mollitia quae quisquam dolor sint. Aperiam eius quam delectus praesentium?
        Fuga nesciunt ipsa tempore cumque in quasi, porro vero eum praesentium voluptatibus rem harum repellat hic perferendis suscipit laboriosam dolor commodi illo ea! Vero sint explicabo quia temporibus exercitationem consequatur.
        Velit ratione, sunt aut facilis magni repudiandae? Aperiam ipsa assumenda ut, repellendus minus sunt. Recusandae omnis accusantium consequuntur quae eum quis eaque enim nemo necessitatibus dignissimos, officiis veniam, fuga eveniet.
        Fuga quidem animi fugiat, at consequatur corrupti distinctio deleniti. Quibusdam qui, molestias eveniet minima eligendi maxime dolores non earum rerum et quod consectetur ipsam voluptatibus doloribus voluptas iure fuga maiores.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam recusandae in voluptatem id laboriosam, nam nesciunt aspernatur corrupti veniam ipsum similique earum ea quaerat odit numquam impedit perspiciatis natus ab?
        Voluptates quidem assumenda, eligendi rerum impedit repellat suscipit eum delectus accusantium quaerat blanditiis et hic voluptatem numquam animi, labore voluptatibus mollitia quae quisquam dolor sint. Aperiam eius quam delectus praesentium?
        Fuga nesciunt ipsa tempore cumque in quasi, porro vero eum praesentium voluptatibus rem harum repellat hic perferendis suscipit laboriosam dolor commodi illo ea! Vero sint explicabo quia temporibus exercitationem consequatur.
        Velit ratione, sunt aut facilis magni repudiandae? Aperiam ipsa assumenda ut, repellendus minus sunt. Recusandae omnis accusantium consequuntur quae eum quis eaque enim nemo necessitatibus dignissimos, officiis veniam, fuga eveniet.
        Fuga quidem animi fugiat, at consequatur corrupti distinctio deleniti. Quibusdam qui, molestias eveniet minima eligendi maxime dolores non earum rerum et quod consectetur ipsam voluptatibus doloribus voluptas iure fuga maiores.
    </div>
<aside id="nav-container">
    <h3 id="tags-title">Tags</h3>
    <ul id="tag-list">
    <?php foreach($currentPost['tags'] as $tag): ?>
        <li><a href="#"><?= $tag ?></a></li>
        <?php endforeach; ?>
    </ul>
    <h3 id="categories-title">Categories</h3>
    <ul id="categories-list">
        <?php  foreach($categories as $category): ?>
            <li><a href="#"><?= $category ?></a></li>
        <?php endforeach; ?>
    </ul>
  </aside>
</main>
<?php
include_once ("templates/footer.php");
?>
