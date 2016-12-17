<!DOCTYPE html>
<html>
<head>
    <title>
                    Recordables                 - Invoice 1047 - 2016-12-06    </title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- user-scalable=yes -->
    <meta name="author" content="iWAT LLC">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <style>
		table, th, td {
    border: 0.5px solid black;
    /*border-collapse:collapse;*/
    border-spacing: 0px;
}

div.addr {
    /*font-family: "Times New Roman", Times, serif;*/
    font-size: 15px;
}
div.divHeader {
    position: relative; /* changed to 'fixed' */
    top: 0em;
}
div.divFooter {
    position: relative;
    bottom: 0em;
}
td.totals {
    background-color: #f2f2f2;
    padding-top: 10px;
    padding-bottom: 10px;
}
body {
    font-family: 'Helvetica';
}
	</style>
</head>
<body>
<div class="divHeader">
    <table style="width:100%" border="0">
        <tr>
            <td>
                625 S Washington St<br/>
                Greencastle, PA 17225<br/>
                <i>www.iwatllc.com</i>
            </td>
            <td style="text-align: center;">
                                    <img class="img-responsive logo" src="C:\xampp\htdocs\bzb//client/client-logo.png" width="200" height="100" alt="iWAT LLC" />
                            </td>
            <td style="text-align: center;">
                <h2>Invoice</h2>
            </td>
        </tr>
    </table>
    <br/>

            <table style="width:40%">
              <tr>
                <th align="left">&nbsp;Bill To:</th>
              </tr>
              <tr>
                <td style="padding-left:10px;">
                                            Recordables                                        <br/>
                                                                <br/>
                                            5691 Rock Dove Drive<br/>
                                            Sarasota,
                        FL                        34241                                    </td>
              </tr>
            </table>
    <br/><br/>

            <table style="width:70%">
                <col width="25%">
                <col width="25%">
                <col width="25%">
                <col width="25%">
              <tr>
                <th style="text-align: center;">Date</th>
                <th style="text-align: center;">Invoice No.</th>
                <th style="text-align: center;">P.O. Number</th>
                <th style="text-align: center;">Terms</th>
              </tr>
              <tr>
                <td align="center">12/06/2016</td>
                <td align="center">1047</td>
                <td align="center"></td>
                <td align="center">Due Upon Receipt</td>
              </tr>
            </table>
    <br/><br/>
</div>

        <table style="width:100%;table-layout:fixed;">
            <thead>
              <tr>
                <th style="text-align: center;width:7%;"> No.</th>
                <th style="text-align: center;width:12%;"> Item</th>
                <th style="text-align: center;width:53%;"> Description</th>
                <th style="text-align: center;width:7%;"> Qty</th>
                <th style="text-align: center;width:10%;"> Rate</th>
                <th style="text-align: center;width:11%;"> Amount</th>
              </tr>
            </thead>
            <tbody>
                                                        <tr>
                    <td  valign="top" style="padding-right:10px;padding-left:10px;width:7%;">
                        <strong>1.</strong>
                    </td>                    <td  valign="top" style="padding-right:10px;padding-left:10px;width:12%;">
                                                    Ticket Action                                            </td>
                    <td  style="padding-right:10px;padding-left:10px;width:53%;" valign="top">
                                                                                    1933 - HART - Investigate and fix issues - user kickout and ss# not saving<br/>
                                                        11/10/2016 11:30 am<br/>
                            Bryson Henneberger                            <br/>
                            ---------------------------                            <br/>
                                                I have investigated this issue further and have decided that the most likely cause of the problem is due to CodeIgniter sessions. CodeIgniter is the framework upon which our application is built upon. It manages certain base-level functions like session handling, database drivers, security, how files are loaded, etc. Looking at the config file for session configuration, I noticed the session will automatically destroy after 7200 seconds (2 hours). You mention that Earlene is getting kicked out after a number of claims (46) and I'm thinking what this really translates to is constant activity in the system during a "single login" (or session), which is lasting longer than 2 hours. In that case, the system WOULD kick any user out, no matter if they are constantly active or not. I have bumped this value up to 43200 seconds (12 hours), to account for a possibility that a user could be constantly active in the system for up to 12 full hours. If a user is logged in for 300 seconds (5 minutes) without any activity during that time period, by default the system will boot the user out for security concerns, including session hijacking. I don't believe that is an issue, so I left that configuration value the same. I think the reason that Earlene was affected was due to her being constantly active in the system without being logged out for over 2 hours.
<br/>
<br/>The other issue is when she logged back in after getting booted that she attempted to perform a search and the system booted her out again. I have a feeling this has to do with the system not fully recognizing that she has a new session after being booted and her previous session (which is not valid any longer) is still trying to be accessed, so she is booted again. Because of this, I have also made a change to the default controller that is accessed when this happens, so that all session information is FULLY reset, which should make it so the old session that was being referenced is not accessed.
<br/>
<br/>Please keep me updated to see if this is still happening to her account, or any others, for future login sessions. I'd also recommend that if this DOES happen again, where the user is booted after performing a search immediately upon login, that the user performs the following steps:
<br/>
<br/>1. Log back into the system
<br/>2. Close the pop-ups that automatically appear (search pop-up and diary pop-up)
<br/>3. Click the "Exit" button in the top-right of the menu
<br/>4. Log back in again
<br/>
<br/>Clicking the "Exit" button actually completely logs the user out, destroys any old references to old sessions, and is a full "refresh" on the user. Like I said, I performed another change so that you should NOT have to do the above steps, I'm just making sure you have a backup plan in case a user gets stuck in a login loop again as you described.<br/>
                    </td>
                    <td style="width:7%;" align="right" valign="top">2.75&nbsp;</td>
                    <td style="width:10%;" align="right" valign="top">$75.00</td>
                    <td style="width:11%;" align="right" valign="top">$206.25</td>
                  </tr>
                                                            <tr>
                    <td  valign="top" style="padding-right:10px;padding-left:10px;width:7%;">
                        <strong>2.</strong>
                    </td>                    <td  valign="top" style="padding-right:10px;padding-left:10px;width:12%;">
                                                    Ticket Action                                            </td>
                    <td  style="padding-right:10px;padding-left:10px;width:53%;" valign="top">
                                                                                    1933 - HART - Investigate and fix issues - user kickout and ss# not saving<br/>
                                                        11/10/2016 02:15 pm<br/>
                            Bryson Henneberger                            <br/>
                            ---------------------------                            <br/>
                                                I've also looked into the social security number issue and have found that the field was not being captured properly. It should now be saved correctly when you attempt to enter a social security number for claimants.<br/>
                    </td>
                    <td style="width:7%;" align="right" valign="top">0.75&nbsp;</td>
                    <td style="width:10%;" align="right" valign="top">$75.00</td>
                    <td style="width:11%;" align="right" valign="top">$56.25</td>
                  </tr>
                                                            <tr>
                    <td  valign="top" style="padding-right:10px;padding-left:10px;width:7%;">
                        <strong>3.</strong>
                    </td>                    <td  valign="top" style="padding-right:10px;padding-left:10px;width:12%;">
                                                    Ticket Action                                            </td>
                    <td  style="padding-right:10px;padding-left:10px;width:53%;" valign="top">
                                                                                    1933 - HART - Investigate and fix issues - user kickout and ss# not saving<br/>
                                                        11/14/2016 02:15 pm<br/>
                            Bryson Henneberger                            <br/>
                            ---------------------------                            <br/>
                                                I've turned error logging to the highest level in your application to help track down the root cause. This should give better information into understanding what is going on. Also, it would be helpful the next time this happens that I'm immediately informed then we can set up a gotomeeting and do database/application profiling while she attempts to log in to see what is directly happening in the execution of the application. <br/>
                    </td>
                    <td style="width:7%;" align="right" valign="top">0.5&nbsp;</td>
                    <td style="width:10%;" align="right" valign="top">$75.00</td>
                    <td style="width:11%;" align="right" valign="top">$37.50</td>
                  </tr>
                                                            <tr>
                    <td  valign="top" style="padding-right:10px;padding-left:10px;width:7%;">
                        <strong>4.</strong>
                    </td>                    <td  valign="top" style="padding-right:10px;padding-left:10px;width:12%;">
                                                    Ticket Action                                            </td>
                    <td  style="padding-right:10px;padding-left:10px;width:53%;" valign="top">
                                                                                    1933 - HART - Investigate and fix issues - user kickout and ss# not saving<br/>
                                                        11/15/2016 04:15 pm<br/>
                            Bryson Henneberger                            <br/>
                            ---------------------------                            <br/>
                                                Gisela,
<br/>
<br/>Thank you for the information.
<br/>
<br/>I've made another round of edits to try to fix this issue based on information collected.
<br/>
<br/>Unfortunately, there were no errors reported that specifically detailed any issues with Earlene's account not being able to log back in properly.
<br/>
<br/>Therefore, I think we need to move forward with attempting "live debugging" in coordination with me, Jennifer, and Earlene when this happens, so we can control her machine and I can do live debugging on the server/database server to gain more information about the issue.
<br/>
<br/>Since it seems that she makes changes to 50+ claims, this certainly seems like an issue that is constant and can be reproduced over time and interaction with the application. However, it would be most helpful to perform a live debugging session like I mentioned.
<br/>
<br/>As a followup to understand more detail, could you answer the following questions?
<br/>
<br/>1. How long after this issue begins to happen does it take for Earlene to log back in - (number of..) minutes or hours or days?
<br/>2. Has Earlene tried to clear the cache/cookies on her machine after it happens and try to log back in? (for more information on clearing cache/cookies: https://kb.wisc.edu/page.php?id=15141 )<br/>
                    </td>
                    <td style="width:7%;" align="right" valign="top">0.75&nbsp;</td>
                    <td style="width:10%;" align="right" valign="top">$75.00</td>
                    <td style="width:11%;" align="right" valign="top">$56.25</td>
                  </tr>
                                        </tbody>
        </table>
        <table style="page-break-inside:avoid;width:100%;table-layout:fixed;">
            <tr>
                <td style="width:72%;padding-right:10px;padding-left:10px;" valign="top" rowspan="5">
                                    </td>
                <td style="width:17%;" align="right" class="totals">
                    <strong>Subtotal &nbsp;</strong>
                </td>
                <td style="width:11%;" align="right" class="totals">
                    $356.25&nbsp;
                </td>
            </tr>
            <tr>
                <td style="width:17%;" align="right" class="totals">
                    <strong>Sales Tax &nbsp;</strong>
                </td>
                <td style="width:11%;" align="right" class="totals">
                    $0.00&nbsp;
                </td>
            </tr>
            <tr>
                <td style="width:17%;" align="right" class="totals">
                    <strong>Total &nbsp;</strong>
                </td>
                <td style="width:11%;" align="right" class="totals">
                    $356.25&nbsp;
                </td>
            </tr>
            <tr>
                <td style="width:17%;" align="right" class="totals">
                    <strong>Amount Paid &nbsp;</strong>
                </td>
                <td style="width:11%;" align="right" class="totals">
                    $0.00&nbsp;
                </td>
            </tr>
            <tr>
                <td style="width:17%;background-color: #f2f2f2;" align="right">
                    <h3><strong>Balance Due &nbsp;</strong></h3>
                </td>
                <td style="width:11%;background-color: #f2f2f2;" align="right">
                    $356.25&nbsp;
                </td>
            </tr>
        </table>

<div class="divFooter">
    <!--<strong>Page 1</strong>-->
</div>

</body>

</html>