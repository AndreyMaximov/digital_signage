<?php

namespace Drupal\openy_digital_signage_classes_schedule;

/**
 * Interface OpenYClassesScheduleManagerInterface.
 *
 * @ingroup openy_digital_signage_classes_schedule
 */
interface OpenYClassesScheduleManagerInterface {

  /**
   * Retrieves the schedule for given time period and branch.
   *
   * @param array $period
   *   Associative array with from and to keys.
   * @param string $room
   *   The room name.
   *
   * @return array
   *   The array of scheduled classes.
   */
  public function getClassesSchedule($period, $room);

}
