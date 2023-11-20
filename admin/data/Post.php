<?php 

//Get All 
function getAll($conn){
   $sql = "SELECT * FROM post 
           WHERE publish=1 ORDER BY post_id DESC";
   $stmt = $conn->prepare($sql);
   $stmt->execute();

   if($stmt->rowCount() >= 1){
   	   $data = $stmt->fetchAll();
   	   return $data;
   }else {
   	 return 0;
   }
}
// function getAll($conn)
// {
//     $sql = "SELECT post.*, COUNT(comments.id) AS comment_count 
//             FROM post LEFT JOIN comment ON posts.id = comment.post_id 
//             GROUP BY posts.id 
//             ORDER BY comment_count DESC";
//     $result = self::$db->query($sql);

//     $posts = array();
//     while ($row = $result->fetch_assoc()) {
//         $post = new Post($row['title'], $row['content']);
//         $post->setId($row['id']);
//         $post->setLikes($row['likes']);
//         $post->setComments($row['comment_count']);
//         $posts[] = $post;
//     }

//     return $posts;
// }
function getAllDeep($conn){
   $sql = "SELECT * FROM post";
   $stmt = $conn->prepare($sql);
   $stmt->execute();

   if($stmt->rowCount() >= 1){
         $data = $stmt->fetchAll();
         return $data;
   }else {
       return 0;
   }
}

function getAllPostsByCategory($conn, $category_id){
   $sql = "SELECT * FROM post  WHERE category=? AND publish=1";
   $stmt = $conn->prepare($sql);
   $stmt->execute([$category_id]);

   if($stmt->rowCount() >= 1){
         $data = $stmt->fetchAll();
         return $data;
   }else {
       return 0;
   }
}
// getById
function getById($conn, $id){
   $sql = "SELECT * FROM post 
           WHERE post_id=? AND publish=1";
   $stmt = $conn->prepare($sql);
   $stmt->execute([$id]);

   if($stmt->rowCount() >= 1){
         $data = $stmt->fetch();
         return $data;
   }else {
       return 0;
   }
}
// getById Deep - Admin
function getByIdDeep($conn, $id){
   $sql = "SELECT * FROM post WHERE post_id=?";
   $stmt = $conn->prepare($sql);
   $stmt->execute([$id]);

   if($stmt->rowCount() >= 1){
         $data = $stmt->fetch();
         return $data;
   }else {
       return 0;
   }
}

// serach
function serach($conn, $key){
   # creating simple search temple :)  
   $key = "%{$key}%";

   $sql = "SELECT * FROM post 
           WHERE publish=1 AND (post_title LIKE ? 
           OR post_text LIKE ?)";
   $stmt = $conn->prepare($sql);
   $stmt->execute([$key, $key]);

   if($stmt->rowCount() >= 1){
         $data = $stmt->fetchAll();
         return $data;
   }else {
       return 0;
   }
}
// getCategoryById
function getCategoryById($conn, $id){
   $sql = "SELECT * FROM category WHERE id=?";
   $stmt = $conn->prepare($sql);
   $stmt->execute([$id]);

   if($stmt->rowCount() >= 1){
         $data = $stmt->fetch();
         return $data;
   }else {
       return 0;
   }
}

//get 5 Categoies 

function get5Categoies($conn){
   $sql = "SELECT * FROM category LIMIT 5";
   $stmt = $conn->prepare($sql);
   $stmt->execute();

   if($stmt->rowCount() >= 1){
         $data = $stmt->fetchAll();
         return $data;
   }else {
       return 0;
   }
}



function getUserByID($conn, $id){
   $sql = "SELECT id, fname, username FROM users WHERE id=?";
   $stmt = $conn->prepare($sql);
   $stmt->execute([$id]);

   if($stmt->rowCount() >= 1){
         $data = $stmt->fetch();
         return $data;
   }else {
       return 0;
   }
}

// getAllCategories
function getAllCategories($conn){
   $sql = "SELECT * FROM category ORDER BY category";
   $stmt = $conn->prepare($sql);
   $stmt->execute();

   if($stmt->rowCount() >= 1){
         $data = $stmt->fetchAll();
         return $data;
   }else {
       return 0;
   }
}

// Delete By ID
function deleteById($conn, $id){
   $sql = "DELETE FROM post WHERE post_id=?";
   $stmt = $conn->prepare($sql);
   $res = $stmt->execute([$id]);

   if($res){
   	   return 1;
   }else {
   	 return 0;
   }
}
// function getLikeCountByPostID($conn, $post_id) {
//    $query = "SELECT COUNT(*) AS like_count FROM likes WHERE post_id = ?";
//    $stmt = $conn->prepare($query);
//    $stmt->bind_param("i", $post_id);
//    $stmt->execute();
//    $result = $stmt->get_result();
//    if ($result->num_rows > 0) {
//        $row = $result->fetch_assoc();
//        return $row['like_count'];
//    }
//    return 0;
// }

function getCommentCountByPostID($conn, $post_id) {
   $query = "SELECT COUNT(*) AS comment_count FROM comments WHERE post_id = ?";
   $stmt = $conn->prepare($query);
   $stmt->bind_param("i", $post_id);
   $stmt->execute();
   $result = $stmt->get_result();
   if ($result->num_rows > 0) {
       $row = $result->fetch_assoc();
       return $row['comment_count'];
   }
   return 0;
}
function getLikeCountByPostID($conn, $post_id) {
   $stmt = $conn->prepare("SELECT COUNT(*) as count FROM likes WHERE post_id = :post_id");
   $stmt->execute([':post_id' => $post_id]);
   $result = $stmt->fetch(PDO::FETCH_ASSOC);
   return $result['count'];
}
// public static function getAll()
// {
//     $sql = "SELECT posts.*, COUNT(comments.id) AS comment_count 
//             FROM posts LEFT JOIN comments ON posts.id = comments.post_id 
//             GROUP BY posts.id 
//             ORDER BY comment_count DESC";
//     $result = self::$db->query($sql);

//     $posts = array();
//     while ($row = $result->fetch_assoc()) {
//         $post = new Post($row['title'], $row['content']);
//         $post->setId($row['id']);
//         $post->setLikes($row['likes']);
//         $post->setComments($row['comment_count']);
//         $posts[] = $post;
//     }

//     return $posts;
// }