<?php
    #header('Content-type: text/xml');
    $search = "Malcolm";
    $url = "http://appletvtest.clarovideo.net/apis/dataprovider/login/username/user@gmail.com/password/123456/jsonutf8";
    $json = null;
    
        $json_string = file_get_contents($url);
        $json_utf8 = mb_convert_encoding($json_string, "UTF-8", "auto");
        $json = json_decode($json_utf8, true);
        print_r($json_utf8);
    
?>

<atv>
    <head>
        
    </head>
    <body>
        
        <searchResults id="com.sample.loginResults:<?php echo $search; ?>">
            <menu>
                <sections>
                        <?php
                            if(isset($json)){
                                $group = $json['response']['groups']['group'];
                                $doc = new DOMDocument();
                                // $doc->loadXML($xml_as_string);
                                $menuSection = $doc->createElement("menuSection");
                                $header = $doc->createElement("header");
                                $horizontalDivider = $doc->createElement("horizontalDivider");
                                $horizontalDivider->setAttribute("alignment", "center");
                                $horizontalDivider->setAttribute("accessibilityLabel", "Movies");
                                $head_title = $doc->createElement("title", $search);
                                $horizontalDivider->appendChild($head_title);
                                $header->appendChild($horizontalDivider);
                                $menuSection->appendChild($header);
                                $items = $doc->createElement("items");
                                for($i=0; $i<count($group); $i++){
                                    $object = $group[$i][0]['common'];
                                    $towLineMenu = $doc->createElement("twoLineMenuItem");
                                    $towLineMenu->setAttribute("id", "list_".$object['position']);
                                    $towLineMenu->setAttribute("accessibilityLabel", "Movie ".$object['position']);
                                    $towLineMenu->setAttribute("onSelect", "atv.loadURL('http://mcbkairrulo.local/clarovideo-atv/views/tv-season.xml');");
                                    $towLineMenu->setAttribute("onPlay", "atv.loadURL('http://mcbkairrulo.local/clarovideo-atv/video/file-video-player.xml');");
                                    $label_title = $doc->createElement("label", $object['title']);
                                    $label_description = $doc->createElement("label2", $object['date']);
                                    $image = $doc->createElement("image", $object['image_medium']);
                                    
                                    $towLineMenu->appendChild($label_title);
                                    $towLineMenu->appendChild($label_description);
                                    $towLineMenu->appendChild($image);
                                    $items->appendChild($towLineMenu);
                                }
                                $menuSection->appendChild($items);
                                $doc->appendChild($menuSection);
                                echo $doc->saveXML($doc->documentElement);
                            }
                        ?>
                </sections>
            </menu>
        </searchResults>
    </body>
</atv>