<?php

namespace Drupal\webform_to_node\Plugin\WebformHandler;

use Drupal\node\Entity\Node;
use Drupal\Core\Form\FormStateInterface;
use Drupal\webform\Plugin\WebformHandlerBase;
use Drupal\webform\WebformSubmissionInterface;

/**
 * 
 * @WebformHandler(
 *   id = "Extract a node",
 *   label = @Translation("Extract a node"),
 *   category = @Translation("Extract"),
 *   description = @Translation("Extract webform data handler blugin."),
 *   cardinality = \Drupal\webform\Plugin\WebformHandlerInterface::CARDINALITY_UNLIMITED,
 *   results = \Drupal\webform\Plugin\WebformHandlerInterface::RESULTS_PROCESSED,
 *   submission = \Drupal\webform\Plugin\WebformHandlerInterface::SUBMISSION_REQUIRED,
 * )
 */

class ExtractWebformHandler extends WebformHandlerBase {
  /**
   * {@inheritdoc}
   */
  public function confirmForm(array &$form, FormStateInterface $form_state, WebformSubmissionInterface $webform_submission) {
    if ($webform_submission->getElementData('fundraiser')) {
      $node = Node::create([
        'type' => 'fundraiser_content',
        'title' => $webform_submission->getElementData('fundraising_title'),
        'body' => $webform_submission->getElementData('treasea'),
        'field_fundraising_image'=> $webform_submission->getElementData('fundraising_image'),
      ]);

      $node->save();
      }
    }
  }
