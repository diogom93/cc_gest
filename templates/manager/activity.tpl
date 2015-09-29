

<link rel="stylesheet" type="text/css" href="../css/activity.css" />

<form class="activity_factory" action="../manager/activity_action.php" onSubmit="javascript: document.getElementById('cab_h_val').value = document.getElementById('op_value').value; document.getElementById('cab_h_desc').value = document.getElementById('op_description').value;" method="post">
	
	<input type="hidden" name='cab_h_val' id="cab_h_val" value=""/>
	<input type="hidden" name='cab_h_desc' id="cab_h_desc" value=""/>
	
	<span class="c_name">
	<label class="title_name" for="ativ_name">Nome</label>
	<input class="field_name" type="text" size="50" name="ativ_name" required id="ativ_name"/>
	<label class="warn" id="ativ_name_val"></label>
	</span>

	<span class="c_type">
	<label class="title_tipo" for="ativ_type">Tipo</label>
	<select name="ativ_type" id="caixa_atividade">
		<option value="Recursos Humanos" selected>Recursos Humanos</option>
		<option value="Missões">Missões</option>
		<option value="Equipamento">Equipamento</option>
		<option value="Consultores">Consultores</option>
		<option value="Aquisições e Serviços de Manutenção">Aquisições e Serviços de Manutenção</option>
		<option value="Despesas Correntes">Despesas Correntes</option>
	</select>
	</span>
	
	<span class="c_start_date">
	<label class="title_start_date" for="ativ_start_date">Data de Início</label>
	<input type="text" placeholder="aaaa" size="4" required name="ativ_start_date_year" id="ativ_start_date_year" onchange="validateDateTripleField('ativ_start_date_year', 'ativ_start_date_month', 'ativ_start_date_day', 'ativ_start_date_val', true);">/<input type="text" placeholder="mm" size="2" required name="ativ_start_date_month" id="ativ_start_date_month" onchange="validateDateTripleField('ativ_start_date_year', 'ativ_start_date_month', 'ativ_start_date_day', 'ativ_start_date_val', true);">/<input type="text" placeholder="dd" size="2" required name="ativ_start_date_day" id="ativ_start_date_day" onchange="validateDateTripleField('ativ_start_date_year', 'ativ_start_date_month', 'ativ_start_date_day', 'ativ_start_date_val', true);">
	<label class="warn" id="ativ_start_date_val"></label>
	</span>
	
	<span class="c_end_date">
	<label class="title_end_date" for="ativ_end_date">Data de Fim</label>
	<input type="text" placeholder="aaaa" size="4" name="ativ_end_date_year" id="ativ_end_date_year" onchange="validateDateTripleField('ativ_end_date_year', 'ativ_end_date_month', 'ativ_end_date_day', 'ativ_end_date_val', false);">/<input type="text" placeholder="mm" size="2" name="ativ_end_date_month" id="ativ_end_date_month" onchange="validateDateTripleField('ativ_end_date_year', 'ativ_end_date_month', 'ativ_end_date_day', 'ativ_end_date_val', false);">/<input type="text" placeholder="dd" size="2" name="ativ_end_date_day" id="ativ_end_date_day" onchange="validateDateTripleField('ativ_end_date_year', 'ativ_send_date_month', 'ativ_end_date_day', 'ativ_end_date_val', false);">
	<label class="warn" id="ativ_end_date_val"></label>
	</span>
	
	<span class="c_buttons">
	<input type="hidden" name="ccid" value="{$ccid}"/>
	<input type="hidden" name="ccnomecurto" value="{$ccnomecurto}"/>
	<input class="button" type="submit" value="Criar"/>
	<label for="popup_new_activity"><input class="button_cancel button" type="button" value="Cancelar"/></label>
	</span>
	
</from>
