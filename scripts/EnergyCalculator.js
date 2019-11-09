function calculatePower(energy)
{
  let powerUntis = Math.ceil(energy/50);
  let generators = Math.ceil(powerUntis/17);
  let capacitors = powerUntis - generators;

  powerRoom = {
    "generators" : generators,
    "capacitors" : capacitors,
    "energy": energy
  }

  return powerRoom;
}
