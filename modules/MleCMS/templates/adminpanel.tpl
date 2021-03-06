{if isset($title_section)}}<h3>{$title_section}</h3>{/if}

{if $snippets|@count > 0}
<table cellspacing="0" class="pagetable">
   <thead>
      <tr>
         <th>{$title}</th>
		 <th>{$title_tag}</th>
         <th class="pageicon" style="width:20px"> </th>
         {if $mode == "master"}<th class="pageicon" style="width:20px"> </th>{/if}
      </tr>
   </thead>
   <tbody>
{foreach from=$snippets item=entry}
		<tr class="{$entry->rowclass}" onmouseover="this.className='{$entry->rowclass}hover';" onmouseout="this.className='{$entry->rowclass}';">
		   <td>{$entry->edit}</td>
		   <td>{literal}{MleCMS name='{/literal}{$entry->name}{literal}'}{/literal}</td>
		   <td>{$entry->editlink}</td>
                   {if $mode == "master"}
		   <td>{$entry->deletelink}</td>
                   {/if}
		</tr>
{/foreach}
	</tbody>
</table>
{/if}

{if $mode == "master"}
<div class="pageoptions">
	<p class="pageoptions">{$addSnippetIcon} {$addSnippetLink}</p>
</div>
{/if}

