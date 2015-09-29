// ----------------------------------------------------------------------
// Javascript form validation routines.
//
// Author: Stephen Poley
//
// Simple routines to quickly pick up obvious typos.
// All validation routines return true if executed by an older browser:
// in this case validation must be left to the server.
//
// Update Jun 2005: discovered that reason IE wasn't setting focus was
// due to an IE timing bug. Added 0.1 sec delay to fix.
//
// Update Oct 2005: minor tidy-up: unused parameter removed
//
// Update Jun 2006: minor improvements to variable names and layout
//
// Update Wed Nov 30 12:17:27 2011: jlopes, messages in PT
//
// ----------------------------------------------------------------------

var nbsp = 160;		// non-breaking space char
var node_text = 3;	// DOM text node-type
var emptyString = /^\s*$/ ;


// --------------------------------------------
// Trim leading/trailing whitespace off string
// --------------------------------------------

function trim(str)
{
  return str.replace(/^\s+|\s+$/g, '');
}


function setfocus(valfield)
{
  document.getElementById(valfield).focus();
}


// --------------------------------------------
// Display warn/error message in HTML element.
// commonCheck routine must have previously been called
// --------------------------------------------
function msg(fld,     // id of element to display message in
             msgtype, // class to give element ("warn" or "error")
             message) // string to display
{
  // setting an empty string can give problems if later set to a 
  // non-empty string, so ensure a space present. (For Mozilla and Opera one could 
  // simply use a space, but IE demands something more, like a non-breaking space.)

  var dispmessage;
  if (emptyString.test(message)) 
    dispmessage = String.fromCharCode(nbsp);    
  else  
    dispmessage = message;

  var elem = document.getElementById(fld);
  elem.innerHTML = dispmessage;  
  
  //elem.className = msgtype;   // set the CSS class to adjust appearance of message
}


// --------------------------------------------
// Common code for all validation routines to:
// (a) check for older / less-equipped browsers
// (b) check if empty fields are required
// Returns true (validation passed), 
//         false (validation failed) or 
//         proceed (don't know yet)
// --------------------------------------------

var proceed = 2;  

function commonCheck    (valfield,   // element to be validated
                         infofield,  // id of element to receive info/error msg
                         required)   // true if required
{
  if (!document.getElementById) 
    return true;  // not available on this browser - leave validation to the server
  var elem = document.getElementById(infofield);
  //if (!elem.firstChild) return true;  // not available on this browser 
  //if (elem.firstChild.nodeType != node_text) return true;  // infofield is wrong type of node
  
  var chk = document.getElementById(valfield);

  if (emptyString.test(chk.value)) {
    if (required) {
 //     msg (infofield, "error", "ERROR: required");
     msg (infofield, "warn", "Campo obrigatório");  
      setfocus(valfield);
      return false;
    }
    else {
      msg (infofield, "warn", "");   // OK
      return true;  
    }
  }
  msg (infofield, "warn", "");
  return proceed;
}


// --------------------------------------------
// Validate if something has been entered
// Returns true if so 
// --------------------------------------------

function validatePresent(valfield,   // element to be validated
                         infofield ) // id of element to receive info/error msg
{
  var stat = commonCheck (valfield, infofield, true);
  if (stat != proceed) return stat;

  msg (infofield, "warn", "");  
  return true;
}


// --------------------------------------------
// Validate if e-mail address
// Returns true if so (and also if could not be executed because of old browser)
// --------------------------------------------

function validateEmail  (valfield,   // element to be validated
                         infofield,  // id of element to receive info/error msg
                         required)   // true if required
{
  var stat = commonCheck (valfield, infofield, required);
  if (stat != proceed) return stat;
  
  var elem = document.getElementById(valfield);

  var tfld = trim(elem.value);  // value of field with whitespace trimmed off
  var email = /^[^@]+@[^@.]+\.[^@]*\w\w$/  ;
  if (!email.test(tfld)) {
//    msg (infofield, "error", "ERROR: not a valid e-mail address");
    msg (infofield, "warn", "E-mail inválido");
    setfocus(valfield);
    return false;
  }

  var email2 = /^[A-Za-z][\w.-]+@\w[\w.-]+\.[\w.-]*[A-Za-z][A-Za-z]$/  ;
  if (!email2.test(tfld)) 
//    msg (infofield, "warn", "Unusual e-mail address - check if correct");
    msg (infofield, "warn", "E-mail estranho - verifique");
  else
    msg (infofield, "warn", "");
  return true;
}

// --------------------------------------------
// Validate if selection for TYPE is ok
// Returns true if so (and also if could not be executed because of old browser)
// --------------------------------------------

function validateSelection (valfield)   // element to be validated
{
  
  var elem = document.getElementById(valfield);
  
  var tfld = elem.value;
  
  if (tfld.indexOf('filtro_todos') > -1)
  {
    setfocus(valfield);
    return false;
  }

  
  return true;
}

// --------------------------------------------
// Validate if selection for CATEGORY is ok
// Returns true if so (and also if could not be executed because of old browser)
// --------------------------------------------

function validateSubSelection (valfield, // element to be validated
                               cat_prefix, //prefix of the category IDs
                               range_id) //id of the parent selection
{
  
  var subsel = document.getElementById(valfield);
  
  var subsel_val = subsel.value;
  
  var sel = document.getElementById(range_id);
  var sel_val = sel.value;
  
  var selectedCategoryVal = document.getElementById(cat_prefix.concat(selval)).value;
  
  if( subsel != selectedCategoryVal)
  {
    setfocus(range_id);
    return false;
  }

  
  return true;
}


// --------------------------------------------
// Validate Nif
// Returns true if so (and also if could not be executed because of old browser)
// Permits spaces, hyphens, brackets and leading +
// --------------------------------------------

function validateNif  (valfield,   // element to be validated
                         infofield,  // id of element to receive info/error msg
                         required)   // true if required
{
  var stat = commonCheck (valfield, infofield, required);
  if (stat != proceed) return stat;

  var elem = document.getElementById(valfield);
  var tfld = trim(elem.value);  // value of field with whitespace trimmed off
//  var telnr = /^\+?[0-9 ()-]+[0-9]$/ ;
  var telnr = /^\+?([0-9]?)+[0-9]$/ ;
  if (!telnr.test(tfld)) {
//    msg (infofield, "error", "ERROR: not a valid telephone number. Characters permitted are digits, space ()- and leading +");
    msg (infofield, "error", "Nif inválido");
    setfocus(valfield);
    return false;
  }

  var numdigits = 0;
  for (var j=0; j<tfld.length; j++)
    if (tfld.charAt(j)>='0' && tfld.charAt(j)<='9') numdigits++;

  if (numdigits!=9) {
//    msg (infofield, "error", "ERROR: " + numdigits + " digits - too short");
    msg (infofield, "warn", "Nif de " + numdigits + " digitos é inválido");
    setfocus(valfield);
    return false;
  }
  
  msg (infofield, "warn", "");

  return true;
}

function validateCCName(valfield, infofield, required) {
  var elem = document.getElementById(valfield);
  var tfield = trim(elem.value);
  
  if (tfield.length < 6 || tfield.length > 256) {
    msg(infofield, "warn", "O campo 'Nome' deve ter entre 6 e 256 caracteres!");
    setfocus(valfield);
    return false;
  }
  
  msg(infofield, "warn", "");
  return true;
}

function validateCCShortName(valfield, infofield, required) {
  var elem = document.getElementById(valfield);
  var tfield = trim(elem.value);
  
  if (tfield.length < 1 || tfield.length > 6) {
    msg(infofield, "warn", "O campo 'Nome Curto' deve ter no máximo 6 caracteres!");
    setfocus(valfield);
    return false;
  }
  
  msg(infofield, "warn", "");
  return true;
}

function validateInstName(valfield, infofield, required) {
  var elem = document.getElementById(valfield);
  var tfield = trim(elem.value);
  
  if (tfield.length < 1 || tfield.lenth > 256) {
    msg(infofield, "warn", "O campo 'Instituição' deve ter entre 1 a 256 caracteres!");
    setfocus(valfield);
    return false;
  }
  
  msg(infofield, "warn", "");
  return true;
}

function validateDesc(valfield, infofield, required) {
  var elem = document.getElementById(valfield);
  var tfield = trim(elem.value);
  
  if (tfield.length > 512) {
    msg(infofield, "warn", "O campo 'Descrição' deve ter no máximo 512 caracteres!");
    setfocus(valfield);
    return false;
  }
  
  msg(infofield, "warn", "");
  return true;
}

function validateCreateCC() {
  if(!validateCCName('cc_nome', 'cc_nome_val', true)) {
    alert("O campo 'Nome' é obrigatório!");
    setfocus('cc_nome');
    return false;
  }
  
  if(!validateCCShortName('cc_nomec', 'cc_nomec_val', true)) {
    alert("O campo 'Nome Curto' é obrigatório!");
    setfocus('cc_nomec');
    return false;
   }
  
  if(!validateCurrency('cc_orc', 'cc_orc_val', true)) {
    alert("O campo 'Orçamento' é obrigatório!");
    setfocus('cc_orc');
    return false;
   }
  
  if(!validateInstName('cc_inst', 'cc_inst_val', true)) {
    alert("O campo 'Instituição' é obrigatório!");
    setfocus('cc_inst');
    return false;
   }
  
  if(!validateDesc('cc_desc', 'cc_desc_val', true)) {
    alert("O campo 'Descrição' só suporta até 512 caracteres!");
    setfocus('cc_desc');
    return false;
   }
  
  if(!validateTableSelection('person_selection', 'person_selection_val', 'Por favor seleccione um gestor!')) {
    return false;
  }
  
  var cur_regex = /(^[0-9]+(\.[0-9]{1,2})?)€?$/ ;
  var match = cur_regex.exec(document.getElementById('cc_orc').value);
  document.getElementById('cc_orc').value = match[1];
  
  return true;
}


// --------------------------------------------
// Validate telephone number
// Returns true if so (and also if could not be executed because of old browser)
// Permits spaces, hyphens, brackets and leading +
// --------------------------------------------

function validateTelnr  (valfield,   // element to be validated
                         infofield,  // id of element to receive info/error msg
                         required)   // true if required
{
  var stat = commonCheck (valfield, infofield, required);
  if (stat != proceed) return stat;

  var elem = document.getElementById(valfield);
  var tfld = trim(elem.value);  // value of field with whitespace trimmed off
//  var telnr = /^\+?[0-9 ()-]+[0-9]$/ ;
  var telnr = /^\+?([0-9]+[- ]?)+[0-9]$/ ;
  if (!telnr.test(tfld)) {
//    msg (infofield, "error", "ERROR: not a valid telephone number. Characters permitted are digits, space ()- and leading +");
    msg (infofield, "error", "Telefone inválido");
    setfocus(valfield);
    return false;
  }

  var numdigits = 0;
  for (var j=0; j<tfld.length; j++)
    if (tfld.charAt(j)>='0' && tfld.charAt(j)<='9') numdigits++;

  if (numdigits<9) {
//    msg (infofield, "error", "ERROR: " + numdigits + " digits - too short");
    msg (infofield, "warn", "" + numdigits + " digitos - muito pequeno");
    setfocus(valfield);
    return false;
  }

  if (numdigits>14)
  {
//    msg (infofield, "warn", numdigits + " digits - check if correct");
    msg (infofield, "warn", numdigits + " digitos - verifique");
    return false;
  }
  else { 
    if (numdigits<9)
    {
//      msg (infofield, "warn", "Only " + numdigits + " digits - check if correct");
      msg (infofield, "warn", "Apenas " + numdigits + " digitos - verifique");
      return false;
    }
    else
      msg (infofield, "warn", "");
  }
  return true;
}

// --------------------------------------------
// Validate currency number
// Returns true if so (and also if could not be executed because of old browser)
// Permits an euro sign ar the end
// --------------------------------------------

function validateCurrency  (valfield,   // element to be validated
                         infofield,  // id of element to receive info/error msg
                         required)   // true if required
{
  var stat = commonCheck (valfield, infofield, required);
  if (stat != proceed) return stat;

  var elem = document.getElementById(valfield);
  var tfld = trim(elem.value);
  
  //number with up to two decimal places, and an optional euro sign - which is dropped:
  var cur_regex = /(^[0-9]+(\.[0-9]{1,2})?)€?$/ ;
  var match = cur_regex.exec(tfld);
  if (!match) {
    msg (infofield, "warn", "Valor inválido");
    setfocus(valfield);
    return false;
  }
  
  msg (infofield, "warn", "");
  return true;
}


// --------------------------------------------
// Validate password
// Returns true if OK 
// --------------------------------------------

function validatePw    (valfield,   // element to be validated
                         infofield,  // id of element to receive info/error msg
                         required)   // true if required
{
  var stat = commonCheck (valfield, infofield, required);
  if (stat != proceed) return stat;

  var elem = document.getElementById(valfield);
  var tfld = elem.value.length; //NO trimming!

  if (tfld<6) {
    msg (infofield, "warn", "Password demasiado curta");
    setfocus(valfield);
    return false;
  }

  if (tfld>24){
    msg (infofield, "warn", "Password demasiado comprida");
    return false;
  }
  else
    msg (infofield, "warn", "");
  return true;
}


function validatePwEquality    (pw1,   // first password
                                pw2,   // second password
                                infofield1,
                                infofield2)  // id of elements to receive info/error msg
{
  
  //check first field first:
  var stat1 = validatePw(pw1, infofield1, true);
  if (stat1 != true) return stat1;
  
  //check if second field is not empty (no validation required)
  var stat2 = commonCheck (pw2, infofield2, true);
  if (stat2 != proceed) return stat2;

  //compare both fields:
  var elem1 = document.getElementById(pw1).value;
  var elem2 = document.getElementById(pw2).value;

  if (elem1 != elem2)
  {
    msg (infofield2, "warn", "Passwords não coincidem");
    return false;
  }
  else
    msg (infofield2, "warn", "");
  return true;
}


function validateDateTripleField(year, month, day, infofield, required)
{
  var stat = commonCheck (year, infofield, required);
  if (stat == false) return stat;
  
  stat = commonCheck (month, infofield, required);
  if (stat == false) return stat;

  stat = commonCheck (day, infofield, required);
  if (stat == false) return stat;


  var yearval = document.getElementById(year);
  var monthval = document.getElementById(month);
  var dayval = document.getElementById(day);
  
  yearval = yearval.value;
  monthval = monthval.value;
  dayval = dayval.value;
  
  if( (yearval == null) && (monthval == null) && (dayval ==null) && !required)
  {
    return true; //it's not required and it's not filled in.
  }
  
  var year_regex = /[0-9]{4}/;
  var month_regex = /[0-9]{1,2}/;
  var day_regex = /[0-9]{1,2}/;
  
  if( yearval.length != 4 || yearval < 2014 || !year_regex.test(yearval))
  {
    msg (infofield, "warn", "Ano inválido");
    return false;
  }
  if( monthval.length < 1 ||  monthval.length > 2 || monthval <= 0 || monthval > 12 || !month_regex.test(monthval))
  {
    msg (infofield, "warn", "Mês inválido");
    return false;
  }
  if( dayval.length < 1 ||  dayval.length > 2 || dayval <= 0 || dayval > 31 || !day_regex.test(dayval))
  {
    msg (infofield, "warn", "Dia inválido");
    return false;
  }
  
  //they should be ok now
  
  return true;
}

function validateChangeEmail() {
  if (!validateEmail('email_n', 'email_n_val', true)) {
    alert("O campo 'Novo Email' é obrigatório!");
    setfocus('email_n');
    return false;
  }
  
  
  return true;
}

function validateChangePass() {
  if (!validatePw('pass_n', 'u_pw_val', true)) {
    alert("O campo 'Nova Password' é obrigatório!");
    setfocus('pass_act');
    return false;
  }
  
  if (!validatePw('pass_nr', 'u_pw2_val', true)) {
    alert("O campo 'Repetir Nova Password' é obrigatório!");
    setfocus('pass_act');
    return false;
  }
  
  return true;
}


function validateRegister()
{
  
  //check for name:
  if( !commonCheck('u_user', 'u_user_val', true))
  {
    alert("O campo 'Nome' é obrigatório!");
    setfocus('u_user');
    return false;
  }
  
  //check for passwords:
  
  //first field:
  if( !validatePw('u_pw', 'u_pw_val', true))
  {
    alert("O campo 'Password' é obrigatório!");
    setfocus('u_pw');
    return false;
  }
  
  //both fields:
  if( !validatePwEquality('u_pw', 'u_pw2', 'u_pw_val', 'u_pw2_val'))
  {
    alert("Os campos 'Password' não são idênticos!");
    setfocus('u_pw2');
    return false;
  }
  
  //email:
  if( validateEmail('u_email', 'u_email_val', true) != true)
  {
    alert("O campo 'E-mail' é obrigatório!");
    setfocus('u_email');
    return false;
  }
  
  
  //check for address
  if( !commonCheck('u_address', 'u_address_val', true))
  {
    alert("O campo 'Morada' é obrigatório!");
    setfocus('u_address');
    return false;
  }
  
  //telephone:
  if( !validateTelnr('u_telephone', 'u_telephone_val', true) )
  {
    alert("O campo 'Telefone' é obrigatório!");
    setfocus('u_telephone');
    return false;
  }
  
  //nif:
  if( !validateNif('u_nif', 'u_nif_val', true))
  {
    alert("O campo 'NIF' é obrigatório!");
    setfocus('u_nif');
    return false;
  }
  
  //selections:
  if( !validateSelection('u_type'))
  {
    alert("Por favor selecione um 'Tipo' válido.");
    setfocus('u_type');
    return false;
  }

  //validation of last selection involves checking the value on the sub_selection hidden form input
  //and comparing it with the range of allowed values
   if( !validateSubSelection('sub_selection_id', 'u_category_', 'u_type'))
  {
    alert("Por favor selecione uma 'Categoria' válida.");
    setfocus('u_type'); //we don't really know chich one was called here, but it won't matter - it's practically unnoticeable
    return false;
  }
  
  
  //replace string for safety:
  document.getElementById('u_pw').replace( /./g, '*' );
  document.getElementById('u_pw2').replace( /./g, '*' );
  
  return true;
  
}

function validateCabInsertion()
{
  //first field:
  if( !validateCurrency('op_value_cab', 'op_value_cab_val', true))
  {
    alert("O campo 'Valor (€)' é obrigatório!");
    setfocus('op_value_cab');
    return false;
  }
  
  //check if an activity is selected:
  if( !commonCheck('cab_activity_selection', 'cab_activity_selection_val', true))
  {
    alert("Por favor selecione uma atividade!");
    setfocus('cab_table_activities');
    return false;
  }
  
  var cur_regex = /(^[0-9]+(\.[0-9]{1,2})?)€?$/ ;
  var match = cur_regex.exec(document.getElementById('op_value_cab').value);
  document.getElementById('op_value_cab').value = match[1];
  
  return true;
}

function validateActivityInsertion()
{
  //check if name is present:
  if( !commonCheck('ativ_name', 'ativ_name_val', true))
  {
    alert("O campo 'Nome' é obrigatório!");
    setfocus('ativ_name');
    return false;
  }
  
  //validate both dates:
  if ( !validateDateTripleField('ativ_start_date_year', 'ativ_start_date_month', 'ativ_start_date_day', 'ativ_start_date_val', true) )
  {
    alert("O campo 'Data de Início' é obrigatório!");
    setfocus('ativ_start_date_year');
    return false;
  }
  
  //this one is not required though...
  if ( !validateDateTripleField('ativ_end_date_year', 'ativ_end_date_month', 'ativ_end_date_day', 'ativ_end_date_val', false) )
  {
    alert("O campo 'Data de Fim' é inválido.");
    setfocus('ativ_end_date_year');
    return false;
  }
  
  return true;
  
}

function validateMovementInsertion()
{
  //check value
  if( !validateCurrency('op_value_mov', 'op_value_mov_val', true))
  {
    alert("O campo 'Valor' é obrigatório!");
    setfocus('op_value_mov');
    return false;
  }
    
    //check intitution
  if( !commonCheck('op_institution_mov', 'op_institution_mov_val', true))
  {
    alert("O campo 'Instituição Beneficiária' é obrigatório!");
    setfocus('op_institution_mov');
    return false;
  }
  
  var cur_regex = /(^[0-9]+(\.[0-9]{1,2})?)€?$/ ;
  var match = cur_regex.exec(document.getElementById('op_value_mov').value);
  var req_value = parseFloat(match[1]);
  
  var selected_cab_id = parseFloat(document.getElementById('cab_id_selector').value.replace(" ", ""));
  var selected_cab_val = parseFloat(document.getElementById('cab_val_' + selected_cab_id).value.replace(" ", ""));
  
  if( req_value > selected_cab_val)
  {
    alert("O campo 'Valor' não pode ser superior ao orçamento restante da cabimentação!");
    setfocus('op_value_mov');
    return false;
  }
  else
    document.getElementById('op_value_mov').value = req_value;
  
  return true;
}

function validateTransferRequest()
{
  //check value
  if( !validateCurrency('op_value_ti1', 'op_value_ti1_val', true))
  {
    alert("O campo 'Valor' é obrigatório!");
    setfocus('op_value_ti1');
    return false;
  }
  
    
    //check selection
  if( !commonCheck('trans1_activity_selection', 'trans1_activity_selection_val', true))
  {
    alert("Por favor selecione um Centro de Custos!");
    setfocus('table_t1');
    return false;
  }
  
  var cur_regex = /(^[0-9]+(\.[0-9]{1,2})?)€?$/ ;
  var match = cur_regex.exec(document.getElementById('op_value_ti1').value);
  document.getElementById('op_value_ti1').value = match[1];
  
  return true;
}

function validateTableSelection(filler_id, warning_id, msg)
{
  if( !commonCheck(filler_id, warning_id, true))
  {
    alert(msg);
    return false;
  }
  
  return true;
}

function validateMovement()
{
  
  if(!(document.getElementById('op_UP_mov').checked))
  {
    //person needed
    if( !validateTableSelection('person_selection', 'person_selection_val', 'Por favor seleccione uma pessoa') )
      return false;
  }
  
  return validateMovementInsertion();
}

function validateRMovementInsertion() {
  if(!validateCurrency('op_value_r_mov', 'op_value_r_mov_val', true)) {
    alert("O campo 'Valor' é obrigatório!");
    setfocus('op_value_r_mov');
    return false;
  }
  
  if(!validateNif('op_supporter_mov', 'op_supporter_mov_val', true)) {
    alert("O campo 'Suportado por' é obrigatório!");
    setfocus('op_supporter_mov');
    return false;
  }

   
  if(!commonCheck('op_institution_r_mov', 'op_institution_r_mov_val', true)) {
    alert("O campo 'Instituição Beneficiária' é obrigatório!");
    setfocus('op_institution_r_mov');
    return false;
  }
  
  var cur_regex = /(^[0-9]+(\.[0-9]{1,2})?)€?$/ ;
  var match = cur_regex.exec(document.getElementById('op_value_r_mov').value);
  var req_value = parseFloat(match[1]);
  
  var selected_cab_id = parseFloat(document.getElementById('r_mov_cab_id_selector').value.replace(" ", ""));
  var selected_cab_val = parseFloat(document.getElementById('r_cab_val_' + selected_cab_id).value.replace(" ", ""));
  
  if( req_value > selected_cab_val)
  {
    alert("O campo 'Valor' não pode ser superior ao orçamento restante da cabimentação!");
    setfocus('op_value_mov');
    return false;
  }
  else
    document.getElementById('op_value_r_mov').value = req_value;
  
  return true;
}

function validateRMovement() {
  
  if(!(document.getElementById('op_UP_r_mov').checked)) {
    if(!validateTableSelection('r_mov_person_selection', 'r_mov_person_selection_val', 'Por favor seleccione uma pessoa') )
      return false;
  }
  
  return validateRMovementInsertion();
}