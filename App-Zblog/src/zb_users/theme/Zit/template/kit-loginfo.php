{$userName=$article.Author.Name}
{if $cfg->StaticName}{$userName=$article.Author.StaticName}{/if}
<img src="{$article.Author.Avatar}" class="avatar" alt="{$userName}"> <a href="{$article.Author.Url}" title="{$msg.view} {$userName}{$msg.logs}">{$userName}</a> <a href="{$article.TimeUrl}" title="{$msg.today}" class="kico-time"><dfn>{$msg.post}</dfn>{$article.Time('Y-m-d')}</a> <a href="{$article.Url}#topic" title="{$article.ViewNums} {$msg.views}" class="kico-view" rel="nofollow"><dfn>{$msg.views}</dfn>{$article.ViewNums}</a> <a href="{$article.Url}#cmts" title="{$article.CommNums} {$msg.comments}" class="kico-cmt" rel="nofollow"><dfn>{$msg.comments}</dfn>{$article.CommNums}</a>