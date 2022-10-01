{* {config_load file="test.conf" section="setup"} *}
{include file="../templates/header.tpl"}
<div class="row">
    <div class="col-12 "> 
        <p class="fs-3 text-center " tabindex="0">uCertify Test Prep</p>
    </div>

    <div class="col-12"> 
        <p class="fs-5 text-center" tabindex="0" ><span class="text-danger fs-4" tabindex="0"> TEST MODE</span> <span class="fw-bold  fs-4" tabindex="0">ON </span>{$generate_datetime} IST,<span class="text-success  fs-4" tabindex="0"> TIME GIVEN</span>: 6 m 00 s</p>
    </div>

    <div class="col-12 text-center"> 
        <button class="btn btn-outline-primary" type="button" >
            <span><i class="bi bi-file-bar-graph"></i></span><span class="ps-1">{$user_data.result}%</span>
            <span class="fs-5">Result</span>
        </button>
        <button class="btn btn-outline-secondary" type="button" onclick="filterSelection('all')">
            <span ><i class="bi bi-card-text"></i></span><span class="ps-1">{$user_data.items}</span>
            <span class="fs-5">Items</span>
        </button>
        <button class="btn btn-outline-success" type="button" onclick="filterSelection('correct')">
            <span class="text-dark"><i class="bi bi-check-lg"></i></span><span class="ps-1">{$user_data.correct}</span>
            <span class="fs-5">Correct</span>
        </button>
        <button class="btn btn-outline-danger" type="button" onclick="filterSelection('wrong')">
            <span class="text-dark"><i class="bi bi-x-lg"></i></span><span class="ps-1">{$user_data.in_correct}</span>
            <span class="fs-5">Incorrect</span>
        </button>
        <button class="btn btn-outline-warning" type="button" onclick="filterSelection('un_attempt')">
            <span class="text-dark"><i class="bi bi-eye-slash"></i></span><span class="ps-1">{$user_data.unattempt}</span>
            <span class="fs-5">Unattempted</span>
        </button>
    </div>
    
    <div class="col-10 container-fluid mt-3"> 
        <div class="table-responsive">
            <table class="table table-striped table-hover ">
                <tbody>
                    {foreach $display_data as $item}
                        {if $item.is_attempt eq '1' && $item.is_user_select_option eq '1'}
                            {$class="correct"}
                        {elseif $item.is_attempt eq '1' && $item.is_user_select_option eq '0'}
                            {$class="wrong"}
                        {else}
                            {$class="un_attempt"}
                        {/if}
                        <tr class="filter-question show {$class}" tabindex="0">
                            <td class="align-middle position-relative" tabindex="0">
                                <div class="float-start">{$item.id}</div>
                            </td>
                            <td class="placeholder col-12" tabindex="0">
                                <div class=""><a href="http://localhost/smarty_project/review/index.php?item_id={$item.id}&content_id={$item.content_id}&select_option={$item.user_select_option}" class="link-dark text-decoration-none">{$item.question}</a></div>
                            </td>
                            {foreach $item.answers as $key=> $item_data}
                                <td scope="row" tabindex="0">
                                    <div class="d-flex justify-content-center">
                                        {if $item_data.is_correct eq '1' && $item.is_user_select_option eq '1'}
                                        <div class="answer_bullets  user_answer">{$show_options.$key}</div>
                                        {elseif (($item_data.is_correct eq '1') && ($item.is_attempt eq '0')) || (($item_data.is_correct eq '1') && ($item.is_attempt eq '1'))}
                                            <div class="answer_bullets correct_answer ">{$show_options.$key}</div>
                                        {elseif (($item_data.id == $item.user_select_option) && $item.is_attempt eq '1') }
                                            <div class="answer_bullets wrong_answer">{$show_options.$key}</div>
                                        {else}
                                            <div class="answer_bullets">{$show_options.$key}</div>
                                        {/if}
                                    </div>
                                </td>
                            {/foreach}
                            {if $item.is_attempt eq '1' && $item.is_user_select_option eq '1'}
                                <td scope="row" tabindex="0">
                                    <i class="bi bi-check-lg"></i>
                                </td>
                            {elseif $item.is_attempt eq '1' && $item.is_user_select_option eq '0'}
                                <td scope="row" tabindex="0">
                                    <i class="bi bi-x-lg">
                                </td>
                            {else}
                                <td scope="row" tabindex="0">
                                    <i class="bi bi-eye-slash"></i>
                                </td>
                            {/if}
                        </tr>
                    {/foreach}
                </tbody>
            </table>
        </div>
    </div>
</div>


{include file="../templates/footer.tpl"}