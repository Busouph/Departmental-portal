
$sql = "select * from head_line_tbl order by head_line asc";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$cat = $stmt->fetchAll(PDO::FETCH_ASSOC);
$cat_list='<option selected disabled>-[Select Category ]-</option>';
foreach($cat as $cats){
$cat_list .="<option value='".$cats['id']."'>".$cats['name']."</option>";
}

