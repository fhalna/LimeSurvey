<div class="panel panel-primary" id="pannel-1">
    <div class="panel-heading">
        <h4 class="panel-title"><?php eT("Data selection"); ?></h4>
    </div>
    <div class="panel-body">


        <div class='form-group'>
            <label for='completionstate' class="col-sm-4 control-label"><?php eT("Include:"); ?> </label>
            <div class="btn-group hidden-sm hidden-xs  pull-left" data-toggle="buttons">
                <label class="btn btn-default active">
                    <input name="completionstate" value="all" type="radio"  checked >
                    <?php eT("All responses"); ?>
                </label>
                <label class="btn btn-default">
                    <input name="completionstate" value="complete" type="radio"   >
                    <?php eT("Completed responses only"); ?>
                </label>
                <label class="btn btn-default">
                    <input name="completionstate" value="incomplete" class="active" type="radio" >
                    <?php eT("Incomplete responses only"); ?>
                </label>
            </div>
        </div>

        <div class='form-group'>
            <label class="col-sm-4 control-label" for='viewsummaryall'><?php eT("View summary of all available fields:"); ?></label>
            <div class='col-sm-1'>
                <?php $this->widget('yiiwheels.widgets.switch.WhSwitch', array('name' => 'viewsummaryall', 'id'=>'viewsummaryall', 'value'=>(isset($_POST['viewsummaryall'])), 'onLabel'=>gT('On'),'offLabel'=>gT('Off')));?>
            </div>
        </div>

        <div class='form-group'>
            <label class="col-sm-4 control-label" id='noncompletedlbl' for='noncompleted' title='<?php eT("Count stats for each question based only on the total number of responses for which the question was displayed"); ?>'><?php eT("Subtotals based on displayed questions:"); ?></label>
            <div class='col-sm-1'>
                <?php $this->widget('yiiwheels.widgets.switch.WhSwitch', array('name' => 'noncompleted', 'id'=>'noncompleted', 'value'=>(isset($_POST['noncompleted'])), 'onLabel'=>gT('On'),'offLabel'=>gT('Off')));?>
            </div>
        </div>

        <?php
        $language_options="";
        foreach ($survlangs as $survlang)
        {
            $language_options .= "\t<option value=\"{$survlang}\"";
            if ($sStatisticsLanguage == $survlang)
            {
                $language_options .= " selected=\"selected\" " ;
            }
            $temp = getLanguageNameFromCode($survlang,true);
            $language_options .= ">".$temp[1]."</option>\n";
        }

        ?>

        <div class='form-group'>
            <label for='statlang' class="col-sm-4 control-label" ><?php eT("Statistics report language:"); ?></label>
            <div class='col-sm-4'>
                <select name="statlang" id="statlang" class="form-control"><?php echo $language_options; ?></select>
            </div>
        </div>
    </div>
</div>
