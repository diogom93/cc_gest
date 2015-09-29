  <!-- error messages -->
  <div id="errors">
	
{if $s_errors.generic}

{foreach from=$s_errors.generic item=error}
    <span class="error">{$error}</span>
{/foreach}
{/if}
  </div>
