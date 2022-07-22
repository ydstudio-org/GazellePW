<?php

View::show_header(Lang::get('bonus.bonus_points_purchase_history'), 'bonus', 'PageBonusHistory');

if (check_perms('admin_bp_history') && isset($_GET['id']) && is_number($_GET['id'])) {
    $ID = (int)$_GET['id'];
    $Header = Lang::get('bonus.bonus_points_spending_history_for1') . Users::format_username($ID) . Lang::get('bonus.bonus_points_spending_history_for2');
    $WhoSpent = Users::format_username($ID) . ' has spent';
} else {
    $ID = G::$LoggedUser['ID'];
    $Header = Lang::get('bonus.bonus_points_spending_history');
    $WhoSpent = Lang::get('bonus.you_have_spent');
}

$Summary = $Bonus->getUserSummary($ID);

$Page  = max(1, isset($_GET['page']) ? intval($_GET['page']) : 1);
$Pages = Format::get_pages($Page, $Summary['nr'], CONFIG['TORRENTS_PER_PAGE']);

if ($Summary['nr'] > 0) {
    $History = $Bonus->getUserHistory($ID, $Page, CONFIG['TORRENTS_PER_PAGE']);
}

?>
<div class=LayoutBody>
    <div class="BodyHeader">
        <h2 class="BodyHeader-nav"><?= $Header ?></h2>
    </div>
    <div class="BodyNavLinks">
        <a href="wiki.php?action=article&id=47" class="brackets"><?= Lang::get('bonus.about_bonus_points') ?></a>
        <a href="bonus.php" class="brackets"><?= Lang::get('bonus.bonus_points_shop') ?></a>
        <a href="bonus.php?action=bprates<?= check_perms('admin_bp_history') && $ID != G::$LoggedUser['ID'] ? "&userid=$ID" : '' ?>" class="brackets"><?= Lang::get('bonus.bonus_point_rates') ?></a>
    </div>

    <div class="LayoutBody">
        <? if ($Summary['total']) { ?>
            <h3><?= $WhoSpent ?> <?= number_format($Summary['total']) ?> <?= Lang::get('bonus.bonus_points_to_purchase') ?> <?= $Summary['nr'] ?> <?= $Summary['nr'] == 1 ? Lang::get('bonus.item') : Lang::get('bonus.items') ?><?= Lang::get('bonus.period') ?></h3>
        <? } else { ?>
            <h3><?= Lang::get('bonus.no_purchase_history') ?></h3>
            <?
        }
        if (isset($History)) {
            if (!empty($Pages)) {
            ?>
                <div class="BodyNavLinks">
                    <?= $Pages ?>
                </div>
            <?
            }
            ?>
            <table class="TableBonusPurchaseHistory Table">
                <thead>
                    <tr class="Table-rowHeader">
                        <td class="Table-cell"><?= Lang::get('bonus.th_item') ?></td>
                        <td class="Table-cell Table-cellRight" width="50px"><?= Lang::get('bonus.th_price') ?></td>
                        <td class="Table-cell" width="150px"><?= Lang::get('bonus.th_purchase_date') ?></td>
                        <td class="Table-cell"><?= Lang::get('bonus.th_for') ?></td>
                    </tr>
                </thead>
                <tbody>
                    <? foreach ($History as $Item) { ?>
                        <tr class="Table-row">
                            <td class="Table-cell"><?= Lang::get("bonus.${Item['Label']}") ?></td>
                            <td class="Table-cell Table-cellRight"><?= number_format($Item['Price']) ?></td>
                            <td class="Table-cell"><?= time_diff($Item['PurchaseDate']) ?></td>
                            <td class="Table-cell"><?= !$Item['OtherUserID'] ? '&nbsp;' : Users::format_username($Item['OtherUserID']) ?></td>
                        </tr>
                    <?  } ?>
                </tbody>
            </table>
        <? }
        if (!empty($Pages)) { ?>
            <div class="BodyNavLinks">
                <?= $Pages ?>
            </div>
        <?
        }
        ?>
    </div>
</div>
<?

View::show_footer();
