<?php
/*****************************************************************************
 *   Copyright (C) 2006-2009, onPHP's MetaConfiguration Builder.             *
 *   Generated by onPHP-1.1.master at 2015-07-12 18:02:36                    *
 *   This file will never be generated again - feel free to edit.            *
 *****************************************************************************/

	class ModeratorLog_Message extends AutoModeratorLog_Message implements Prototyped, DAOConnected
	{
		/**
		 * @return ModeratorLog_Message
		**/
		public static function create()
		{
			return new self;
		}
		
		/**
		 * @return ModeratorLog_MessageDAO
		**/
		public static function dao()
		{
			return Singleton::getInstance('ModeratorLog_MessageDAO');
		}
		
		/**
		 * @return ProtoModeratorLog_Message
		**/
		public static function proto()
		{
			return Singleton::getInstance('ProtoModeratorLog_Message');
		}

        public function exportInfo()
        {
            return [
                'message' => $this->getMessage()
            ];
        }

    }
?>