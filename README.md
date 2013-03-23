Phing-NotifySendTask
====================

enable phing to send desktop notifications via notify-send 


How to use it
=============
Copy the php file to whereever you need it.

Declare it in your build.xml, with either:
    `<taskdef name="notifysend" classname="phing.tasks.ext.NotifySendTask"/>`
or
    `<taskdef name="notifysend" classname="tasks.NotifySendTask"/>`

Depending on where you've put the file.


At it's very simplest, use it like this:
        `<notifysend title='Deploy Script' msg='Database migrated' />`

An icon can be specified, if you wish.
