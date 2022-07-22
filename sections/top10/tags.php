<?
// error out on invalid requests (before caching)
if (isset($_GET['details'])) {
    if (in_array($_GET['details'], array('ut', 'ur', 'v'))) {
        $Details = $_GET['details'];
    } else {
        error(404);
    }
} else {
    $Details = 'all';
}

View::show_header(Lang::get('top10.top_10_tags'), '', 'PageTop10Tag');
?>
<div class="LayoutBody">
    <div class="BodyHeader">
        <h2 class="BodyHeader-nav"><?= Lang::get('top10.top_10_tags') ?></h2>
        <? Top10View::render_linkbox("tags", 'BodyNavLinks'); ?>
    </div>

    <?

    // defaults to 10 (duh)
    $Limit = isset($_GET['limit']) ? intval($_GET['limit']) : 10;
    $Limit = in_array($Limit, array(10, 100, 250)) ? $Limit : 10;

    if ($Details == 'all' || $Details == 'ut') {
        if (!$TopUsedTags = $Cache->get_value('topusedtag_' . $Limit)) {
            $DB->query("
			SELECT
				t.ID,
				t.Name,
				COUNT(tt.GroupID) AS Uses,
				SUM(tt.PositiveVotes-1) AS PosVotes,
				SUM(tt.NegativeVotes-1) AS NegVotes
			FROM tags AS t
				JOIN torrents_tags AS tt ON tt.TagID=t.ID
			GROUP BY tt.TagID
			ORDER BY Uses DESC
			LIMIT $Limit");
            $TopUsedTags = $DB->to_array();
            $Cache->cache_value('topusedtag_' . $Limit, $TopUsedTags, 3600 * 12);
        }

        generate_tag_table(Lang::get('top10.most_used_torrent_tags'), 'ut', $TopUsedTags, $Limit);
    }

    if ($Details == 'all' || $Details == 'ur') {
        if (!$TopRequestTags = $Cache->get_value('toprequesttag_' . $Limit)) {
            $DB->query("
			SELECT
				t.ID,
				t.Name,
				COUNT(r.RequestID) AS Uses,
				'',''
			FROM tags AS t
				JOIN requests_tags AS r ON r.TagID=t.ID
			GROUP BY r.TagID
			ORDER BY Uses DESC
			LIMIT $Limit");
            $TopRequestTags = $DB->to_array();
            $Cache->cache_value('toprequesttag_' . $Limit, $TopRequestTags, 3600 * 12);
        }

        generate_tag_table(Lang::get('top10.most_used_request_tags'), 'ur', $TopRequestTags, $Limit, false, true);
    }

    if ($Details == 'all' || $Details == 'v') {
        if (!$TopVotedTags = $Cache->get_value('topvotedtag_' . $Limit)) {
            $DB->query("
			SELECT
				t.ID,
				t.Name,
				COUNT(tt.GroupID) AS Uses,
				SUM(tt.PositiveVotes-1) AS PosVotes,
				SUM(tt.NegativeVotes-1) AS NegVotes
			FROM tags AS t
				JOIN torrents_tags AS tt ON tt.TagID=t.ID
			GROUP BY tt.TagID
			ORDER BY PosVotes DESC
			LIMIT $Limit");
            $TopVotedTags = $DB->to_array();
            $Cache->cache_value('topvotedtag_' . $Limit, $TopVotedTags, 3600 * 12);
        }

        generate_tag_table(Lang::get('top10.most_highly_voted_tags'), 'v', $TopVotedTags, $Limit);
    }

    echo '</div>';
    View::show_footer();
    exit;

    // generate a table based on data from most recent query to $DB
    function generate_tag_table($Caption, $Tag, $Details, $Limit, $ShowVotes = true, $RequestsTable = false) {
        if ($RequestsTable) {
            $URLString = 'requests.php?tags=';
        } else {
            $URLString = 'torrents.php?taglist=';
        }
    ?>
        <h3><?= Lang::get('top10.top') ?> <?= $Limit . ' ' . $Caption ?>
            <small class="top10_quantity_links">
                <?
                switch ($Limit) {
                    case 100: ?>
                        - <a href="top10.php?type=tags&amp;details=<?= $Tag ?>" class="brackets"><?= Lang::get('top10.top') ?> 10</a>
                        - <span class="brackets"><?= Lang::get('top10.top') ?> 100</span>
                        - <a href="top10.php?type=tags&amp;limit=250&amp;details=<?= $Tag ?>" class="brackets"><?= Lang::get('top10.top') ?> 250</a>
                    <? break;
                    case 250: ?>
                        - <a href="top10.php?type=tags&amp;details=<?= $Tag ?>" class="brackets"><?= Lang::get('top10.top') ?> 10</a>
                        - <a href="top10.php?type=tags&amp;limit=100&amp;details=<?= $Tag ?>" class="brackets"><?= Lang::get('top10.top') ?> 100</a>
                        - <span class="brackets"><?= Lang::get('top10.top') ?> 250</span>
                    <? break;
                    default: ?>
                        - <span class="brackets"><?= Lang::get('top10.top') ?> 10</span>
                        - <a href="top10.php?type=tags&amp;limit=100&amp;details=<?= $Tag ?>" class="brackets"><?= Lang::get('top10.top') ?> 100</a>
                        - <a href="top10.php?type=tags&amp;limit=250&amp;details=<?= $Tag ?>" class="brackets"><?= Lang::get('top10.top') ?> 250</a>
                <?  } ?>
            </small>
        </h3>
        <div class="TableContainer">
            <table class="TableTag Table">
                <tr class="Table-rowHeader">
                    <td class="Table-cell"><?= Lang::get('top10.rank') ?></td>
                    <td class="Table-cell"><?= Lang::get('top10.tag') ?></td>
                    <td class="Table-cell Table-cellRight"><?= Lang::get('top10.uses') ?></td>
                    <? if ($ShowVotes) {   ?>
                        <td class="Table-cell Table-cellRight"><?= Lang::get('top10.pos_votes') ?></td>
                        <td class="Table-cell Table-cellRight"><?= Lang::get('top10.neg_votes') ?></td>
                    <?  }   ?>
                </tr>
                <?
                // in the unlikely event that query finds 0 rows...
                if (empty($Details)) {
                    echo '
		<tr class="Table-row">
			<td class="Table-cell Table-cellCenter" colspan="9">' . Lang::get('top10.found_no_tags_matching_the_criteria') . '</td>
		</tr>
		</table></div>';
                    return;
                }
                $Rank = 0;
                foreach ($Details as $Detail) {
                    $Rank++;
                ?>
                    <tr class="Table-row">
                        <td class="Table-cell"><?= $Rank ?></td>
                        <td class="Table-cell"><a href="<?= $URLString ?><?= $Detail['Name'] ?>"><?= $Detail['Name'] ?></a></td>
                        <td class="Table-cell Table-cellRight"><?= number_format($Detail['Uses']) ?></td>
                        <? if ($ShowVotes) { ?>
                            <td class="Table-cell Table-cellRight"><?= number_format($Detail['PosVotes']) ?></td>
                            <td class="Table-cell Table-cellRight"><?= number_format($Detail['NegVotes']) ?></td>
                        <?      } ?>
                    </tr>
            <?
                }
                echo '</table></div>';
            }
            ?>