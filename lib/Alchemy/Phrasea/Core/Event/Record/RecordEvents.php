<?php

/*
 * This file is part of Phraseanet
 *
 * (c) 2005-2014 Alchemy
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Alchemy\Phrasea\Core\Event\Record;

final class RecordEvents
{
    const CREATED   = 'record.created';
    const DELETED   = 'record.deleted';
    const DELETE    = 'record.delete';

    // Change
    const COLLECTION_CHANGED = 'record.collection_changed';
    const METADATA_CHANGED = 'record.metadata_changed';
    const ORIGINAL_NAME_CHANGED = 'record.original_name_changed';
    const STATUS_CHANGED = 'record.status_changed';
    const ROTATE = 'record.rotate';

    // Sub-definitions
    const SUB_DEFINITIONS_CREATION = 'record.sub_definitions_creation';
    const SUB_DEFINITION_CREATION = 'record.sub_definition_creation';
    const SUB_DEFINITION_CREATED = 'record.sub_definition_created';
    const SUB_DEFINITIONS_CREATED = 'record.sub_definitions_created';
    const SUB_DEFINITION_CREATION_FAILED = 'record.sub_definition_creation_failed';

    const MEDIA_SUBSTITUTED = 'record.media_substituted';

    const STORY_COVER_CHANGED = 'record.story_cover_changed';

    // ask a worker to write metadata into the document and/or subdefs
    const DO_WRITE_EXIF = 'record.do_write_exif';
    // ask a worker to create subdefs of a record
    const DO_CREATE_SUBDEFINITIONS = 'record.do_create_subdefinitions';
}
