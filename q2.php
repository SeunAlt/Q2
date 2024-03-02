function smallestindex($arr, $size){
    $min = $arr[0];
    $index = 0;
    for($i = 1; $i < $size; $i++){
        if($arr[$i] < $min){
            $min = $arr[$i];
            $index = $i;
        }
    }
    return $index;
}

// Test the function
$array = array(3, 1, 7, 5, 2);
$size = count($array);
$smallestIndex = smallestindex($array, $size);
echo "The index of the smallest element in the array is: " . $smallestIndex;