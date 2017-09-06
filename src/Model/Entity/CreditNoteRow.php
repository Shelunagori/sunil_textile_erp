<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CreditNoteRow Entity
 *
 * @property int $id
 * @property int $credit_note_id
 * @property int $item_id
 * @property float $quantity
 * @property float $rate
 * @property float $taxable_value
 * @property int $gst_figure_id
 * @property int $input_cgst_ledger_id
 * @property int $input_sgst_ledger_id
 * @property int $input_igst_ledger_id
 *
 * @property \App\Model\Entity\CreditNote $credit_note
 * @property \App\Model\Entity\Item $item
 * @property \App\Model\Entity\GstFigure $gst_figure
 * @property \App\Model\Entity\InputCgstLedger $input_cgst_ledger
 * @property \App\Model\Entity\InputSgstLedger $input_sgst_ledger
 * @property \App\Model\Entity\InputIgstLedger $input_igst_ledger
 */
class CreditNoteRow extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
