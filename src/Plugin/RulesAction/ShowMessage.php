<?php

namespace Drupal\codimth_custom_rules_action\Plugin\RulesAction;

use Drupal\rules\Core\RulesActionBase;

/**
 * Provides a 'Show message on your site' action.
 *
 * @RulesAction(
 *   id = "codimth_custom_rules_action_show_message",
 *   label = @Translation("Codimth Show message"),
 *   category = @Translation("CodimTh"),
 *   context = {
 *     "message" = @ContextDefinition("string",
 *       label = @Translation("Message"),
 *       description = @Translation("write your message"),
 *     ),
 *     "type" = @ContextDefinition("string",
 *       label = @Translation("Message type"),
 *       description = @Translation("Message type: status, warning or error "),
 *     ),
 *   }
 * )
 *
 */
class ShowMessage extends RulesActionBase
{

    /**
     * @param $name
     */
    protected function doExecute($message, $type)
    {
        \Drupal::messenger()->addMessage(t($message), $type);
    }

}
