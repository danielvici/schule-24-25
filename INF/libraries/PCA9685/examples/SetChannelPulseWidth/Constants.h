// ----------------------------------------------------------------------------
// Constants.h
//
//
// Authors:
// Peter Polidoro peter@polidoro.io
// ----------------------------------------------------------------------------
#ifndef CONSTANTS_H
#define CONSTANTS_H
#include <Arduino.h>
#include <PCA9685.h>


namespace constants
{
extern const PCA9685::DeviceAddress device_address;
extern const PCA9685::Pin output_enable_pin;

extern const size_t loop_delay;
extern const PCA9685::Frequency frequency;
extern const PCA9685::Channel channel;

enum{EXAMPLE_COUNT=4};

struct Example
{
  PCA9685::Duration pulse_width;
  PCA9685::Duration phase_shift;
};

extern const Example examples[EXAMPLE_COUNT];
}
#endif
