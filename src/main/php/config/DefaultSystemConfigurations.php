<?php
/**
 *
 * Copyright (C) 2011 Aldrin Edison Baroi
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the 
 *     Free Software Foundation, Inc.,
 *     51 Franklin Street, Fifth Floor
 *     Boston, MA 02110-1301, USA.
 *     http://www.gnu.org/copyleft/gpl.html
 *
 * NOTE: *** RECOMMENDATION: DO NOT MODIFY THIS FILE ***
 *       Put your site specific system settings in the "SiteSpecificSystemConfigurations.php" file
 *       
 */

if (!defined('MEDIAWIKI'))
{
	echo("This is an extension to the MediaWiki package and cannot be run standalone.\n");
	exit( 1 );
} 

# ---------------------------------------------------------------------------
# Notification
# ---------------------------------------------------------------------------
#
# :: Notification Mediums ::
#
$wgPageAttachment_notificationMediums[] = 'email';

#
# :: Message Composers ::
#
$wgPageAttachment_messageComposers['email'] = 'PageAttachment\\Notification\\Email\\EmailMessageComposer';

#
# :: Message Transporters ::
#
$wgPageAttachment_messageTransporters['email'] = 'PageAttachment\\Notification\\Email\\EmailTransporter';


## ::END ::
