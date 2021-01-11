<div class="container">
    <div class="form-cent" style="background-color: black;">
        <!-- <div class="content"> -->
        <h1 style="color: white;">Sign Up</h1>
        <hr />
        <form role="form" action="<?= base_url('index.php/welcome/register'); ?>" method="post">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <input class="input-rad" type="email" name="email" id="email" placeholder="Email" required
                        value="<?= set_value('email'); ?>">
                    <?= form_error('email', '<br><small class="text-danger">', '</small>'); ?>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <input class="input-rad" type="text" name="username" id="username" placeholder="Username" required
                        value="<?php echo set_value('username'); ?>">
                    <?= form_error('username', '<br><small class="text-danger">', '</small>'); ?>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <input class="input-rad" type="password" name="password" id="password" placeholder="Password"
                        required value="<?php echo set_value('password'); ?>">
                    <?= form_error('password', '<br><small class="text-danger">', '</small>'); ?>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <input class="input-rad" type="password" name="repassword" id="repassword"
                        placeholder="Re-Type Password" required value="<?php echo set_value('repassword'); ?>">
                    <?= form_error('repassword', '<br><small class="text-danger">', '</small>'); ?>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                </div>
                <br>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <p style="color: white;">By Register, you are agree with SavorGame's <a data-toggle="modal"
                            data-target="#eula_modal">EULA</a></p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <input class="input-rad submit-but" type="submit" value="Register">
                </div>
            </div>
        </form>
    </div>
    <!-- </div> -->
</div>

</div>

<div id="eula_modal" class="modal fade" role="dialog">
    <div class="modal-dialog" style="max-width:100vw;width: fit-content;">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">
                    SavorGame's EULA
                </h4>
            </div>
            <div class="modal-body">
                <pre style="font-size: 16px;">
End-User License Agreement (EULA) of SavorGame
This End-User License Agreement ("EULA") is a legal agreement between you and SavorGame

This EULA agreement governs your acquisition and use of our SavorGame application ("Application")
directly from
SavorGame or indirectly through a SavorGame authorized reseller or distributor (a "Reseller").

Please read this EULA agreement carefully before completing the installation process and using the
SavorGame
application.
It provides a license to use the SavorGame application and contains warranty information and
liability disclaimers.

If you register for a free trial of the SavorGame application, this EULA agreement will also govern
that trial. By
clicking "accept" or installing and/or using the SavorGame application, you are confirming your
acceptance of the
Software
and agreeing to become bound by the terms of this EULA agreement.

If you are entering into this EULA agreement on behalf of a company or other legal entity, you
represent that you
have the authority to bind such entity and its affiliates to these terms and conditions. If you do
not have such
authority or if you do not agree with the terms and conditions of this EULA agreement, do not
install or use the
Software, and you must not accept this EULA agreement.

This EULA agreement shall apply only to the Software supplied by SavorGame herewith regardless of
whether other
software is referred to or described herein. The terms also apply to any SavorGame updates,
supplements,
Internet-based services, and support services for the Software, unless other terms accompany those
items on
delivery. If so, those terms apply.

License Grant
SavorGame hereby grants you a personal, non-transferable, non-exclusive licence to use the SavorGame
application on
your devices in accordance with the terms of this EULA agreement.

You are permitted to load the SavorGame application (for example a PC, laptop, mobile or tablet)
under your control.
You are responsible for ensuring your device meets the minimum requirements of the SavorGame
application.

You are not permitted to:

Edit, alter, modify, adapt, translate or otherwise change the whole or any part of the Software nor
permit the whole
or any part of the Software to be combined with or become incorporated in any other software, nor
decompile,
disassemble or reverse engineer the Software or attempt to do any such things
Reproduce, copy, distribute, resell or otherwise use the Software for any commercial purpose
Allow any third party to use the Software on behalf of or for the benefit of any third party
Use the Software in any way which breaches any applicable local, national or international law
use the Software for any purpose that SavorGame considers is a breach of this EULA agreement
Intellectual Property and Ownership
SavorGame shall at all times retain ownership of the Software as originally downloaded by you and
all subsequent
downloads of the Software by you. The Software (and the copyright, and other intellectual property
rights of
whatever nature in the Software, including any modifications made thereto) are and shall remain the
property of My
Company.

SavorGame reserves the right to grant licences to use the Software to third parties.

Termination
This EULA agreement is effective from the date you first use the Software and shall continue until
terminated. You
may terminate it at any time upon written notice to SavorGame.

This EULA was created for SavorGame

It will also terminate immediately if you fail to comply with any term of this EULA agreement. Upon
such
termination, the licenses granted by this EULA agreement will immediately terminate and you agree to
stop all access
and use of the Software. The provisions that by their nature continue and survive will survive any
termination of
this EULA agreement.

Governing Law
This EULA agreement, and any dispute arising out of or in connection with this EULA agreement, shall
be governed by and construed in accordance with the laws of International Countries.
                </pre>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Okay</button>
            </div>
        </div>

    </div>
</div>


</body>

</html>