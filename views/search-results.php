<atv>
    <head>
        <script src="http://mcbkairrulo.local/clarovideo-atv/js/main.js" />
    </head>
    <body>
        <searchResults id="com.sample.searchResults:<?php echo $_GET['searchTerm']; ?>">
            <menu>
                <sections>
                    <menuSection>
                        <header>
                            <horizontalDivider alignment="center" accessibilityLabel="Movies">
                                <title><?php echo $_GET['searchTerm']; ?></title>
                            </horizontalDivider>
                        </header>
                        <items>
                            <posterMenuItem id="list_0" accessibilityLabel="Poster Menu Item for Movie 1" onSelect="atv.loadURL('http://mcbkairrulo.local/clarovideo-atv/views/movie.xml');" onPlay="atv.loadURL('http://mcbkairrulo.local/clarovideo-atv/video/file-video-player.xml');">
                                <label>Movie 1</label>
                                <label2>2011</label2>
                                <image>http://mcbkairrulo.local/clarovideo-atv/images/dummy/movie1.png</image>
                            </posterMenuItem>
                            <posterMenuItem id="list_1" onSelect="atv.loadURL('http://mcbkairrulo.local/clarovideo-atv/views/movie.xml');" onPlay="atv.loadURL('http://mcbkairrulo.local/clarovideo-atv/video/file-video-player.xml');">
                                <label>Movie 2</label>
                                <label2>2008</label2>
                                <image>http://mcbkairrulo.local/clarovideo-atv/images/dummy/movie1.png</image>
                                <accessories>
                                    <HD/>
                                </accessories>
                            </posterMenuItem>
                            <posterMenuItem id="list_2" onSelect="atv.loadURL('http://mcbkairrulo.local/clarovideo-atv/views/movie.xml');" onPlay="atv.loadURL('http://mcbkairrulo.local/clarovideo-atv/video/file-video-player.xml');">
                                <label>Movie 3</label>
                                <label2>2010</label2>
                                <image>http://mcbkairrulo.local/clarovideo-atv/images/dummy/movie1.png</image>
                            </posterMenuItem>
                        </items>
                    </menuSection>
                    <menuSection>
                        <header>
                            <horizontalDivider alignment="center" accessibilityLabel="TV shows">
                                <title>TV Shows</title>
                            </horizontalDivider>
                        </header>
                        <items>
                            <twoLineMenuItem id="list_3" accessibilityLabel="TV show 1, season 12" onSelect="atv.loadURL('http://mcbkairrulo.local/clarovideo-atv/views/tv-season.xml');" onPlay="atv.loadURL('http://mcbkairrulo.local/clarovideo-atv/video/file-video-player.xml');">
                                <label>TV Show 1</label>
                                <label2>Season 12</label2>
                                <image>http://mcbkairrulo.local/clarovideo-atv/images/dummy/tv1.png</image>
                            </twoLineMenuItem>
                            <twoLineMenuItem id="list_4" accessibilityLabel="TV show 2, season 3" onSelect="atv.loadURL('http://mcbkairrulo.local/clarovideo-atv/views/tv-season.xml');" onPlay="atv.loadURL('http://mcbkairrulo.local/clarovideo-atv/video/file-video-player.xml');">
                                <label>TV Show 2</label>
                                <label2>Season 3</label2>
                                <image>http://mcbkairrulo.local/clarovideo-atv/images/dummy/tv1.png</image>
                            </twoLineMenuItem>
                        </items>
                    </menuSection>
                    <menuSection>
                        <header>
                            <horizontalDivider alignment="center" accessibilityLabel="TV Episodes">
                                <title>TV Episodes</title>
                            </horizontalDivider>
                        </header>
                        <items>
                            <twoLineMenuItem id="list_5" accessibilityLabel="Episode 1, season 2" onSelect="atv.loadURL('http://mcbkairrulo.local/clarovideo-atv/views/tv-episode.xml');" onPlay="atv.loadURL('http://mcbkairrulo.local/clarovideo-atv/video/file-video-player.xml');">
                                <label>Episode Title 1</label>
                                <label2>09/06/11, Season 2</label2>
                                <image>http://mcbkairrulo.local/clarovideo-atv/images/dummy/tv1.png</image>
                            </twoLineMenuItem>
                            <twoLineMenuItem id="list_6" accessibilityLabel="Episode 2, season 1" onSelect="atv.loadURL('http://mcbkairrulo.local/clarovideo-atv/views/tv-episode.xml');" onPlay="atv.loadURL('http://mcbkairrulo.local/clarovideo-atv/video/file-video-player.xml');">
                                <label>Episode Title 2</label>
                                <label2>03/02/10, Season 1</label2>
                                <image>http://mcbkairrulo.local/clarovideo-atv/images/dummy/tv1.png</image>
                            </twoLineMenuItem>
                        </items>
                    </menuSection>
                </sections>
            </menu>
        </searchResults>
    </body>
</atv>
