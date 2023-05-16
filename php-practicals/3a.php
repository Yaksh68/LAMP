<!DOCTYPE html>
<html>
    <body>
    
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Enter a paragraph: <input type="text" name="fname"><br>
        Word to be searched: <input type="text" name="word"><br>
        <input type="submit" value="SUBMIT">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            $paragraph = htmlspecialchars($_REQUEST['fname']); 
            $word = htmlspecialchars($_REQUEST['word']);
            function count_sentences_and_words($paragraph) {
                $sentences = preg_split('/([.?!]+)/', $paragraph, -1, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);
                $count_sentences = count($sentences);
                $count_words = array();
                
                for ($i = 0; $i < $count_sentences; $i++) {
                    $words = explode(" ", trim($sentences[$i]));
                    $count_words[$i] = count($words);
                }
                
                return array($count_sentences, $count_words);
            }
            
            function count_characters($paragraph) {
                $count_chars = array();
                $chars = str_split($paragraph);
                
                foreach ($chars as $char) {
                    if (isset($count_chars[$char])) {
                        $count_chars[$char]++;
                    } else {
                        $count_chars[$char] = 1;
                    }
                }
                
                return $count_chars;
            }
            
         
            
            
       
            list($count_sentences, $count_words) = count_sentences_and_words($paragraph);
            
       
            echo "Total number of sentences: " . $count_sentences . "<br>";
            echo "Number of words in each sentence:<br>";
            for ($i = 0; $i < $count_sentences; $i++) {
                echo "Sentence " . ($i+1) . ": " . $count_words[$i] . "<br>";
            }
            
            $count_chars = count_characters($paragraph);
            
            echo "Total number of characters: " . strlen($paragraph) . "<br>";
            echo "Occurrence of each character:<br>";
            foreach ($count_chars as $char => $count) {
                echo $char . ": " . $count . "<br>";
            }
            
            
            $position = strpos($paragraph, $word);
            
            if ($position === false) {
                echo "The word '" . $word . "' was not found in the paragraph.<br>";
            } else {
                echo "The word '" . $word . "' was found at position " . ($position+1) . "<br>";
            }
        }
    ?>
    </body>
</html>