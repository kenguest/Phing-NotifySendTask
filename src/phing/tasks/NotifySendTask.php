<?php
/**
 * NotifySendTask.php
 * 18-Jan-2013
 *
 * PHP Version 5
 *
 * @category NotifySendTask
 * @package  NotifySendTask
 * @author   Ken Guest <ken@linux.ie>
 * @license  GPL (see http://www.gnu.org/licenses/gpl.txt)
 * @link     NotifySendTask.php
 */

/**
 * NotifySendTask
 *
 * @category NotifySendTask
 * @package  NotifySendTask
 * @author   Ken Guest <ken@linux.ie>
 * @license  GPL (see http://www.gnu.org/licenses/gpl.txt)
 * @link     NotifySendTask.php
 */
class NotifySendTask extends Task
{
    protected $msg = null;
    protected $title = null;
    protected $icon = 'info';

    /**
     * setIcon
     *
     * @param string $icon name/location of icon
     *
     * @return void
     */
    function setIcon($icon)
    {
        $this->icon = $icon;
    }

    /**
     * setTitle
     *
     * @param string $title Title to display
     *
     * @return void
     */
    function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * setMsg
     *
     * @param string $msg Message
     *
     * @return void
     */
    function setMsg($msg)
    {
        $this->msg = $msg;
    }

    /**
     * main
     *
     * @return void
     */
    function main()
    {
        $msg = '';
        $title = 'Phing';

        if ($this->title != '') {
            $title = "'" . $this->title . "'";
        }

        if ($this->msg != '') {
            $msg = "'" . $this->msg . "'";
        }

        exec(
            escapeshellcmd(
                'notify-send -i ' . $this->icon . ' ' . $title . ' ' . $msg
            ),
            $output,
            $return
        );
        if ($return !== 0) {
            throw new BuildException("Notify task failed.");
        }
        $this->log($msg);
    }
}


// vim:set et ts=4 sw=4:
?>
