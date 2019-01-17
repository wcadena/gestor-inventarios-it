import { ChartConfig } from '../../constants/chart-config';
// Daily Sales
export const dailySales = {
  label: 'Daily Sales',
  chartdata: [100, 200, 125, 250, 200, 150, 200],
  labels: ['9', '10', '11', '12', '13', '14', '15']
}

//Traffic Channel

export const trafficChannel = {
  label: 'Direct User',
  labels: ['Direct User', 'Referral', 'Facebook', 'Google', 'Instagram'],
  chartdata: [8.5, 6.75, 5.5, 7, 4.75]
}

// Space Used
export const spaceUsed = {
  chartData: {
    labels: ['Space Used', 'Space Left'],
    datasets: [{
      data: [275, 100],
      backgroundColor: [
        ChartConfig.color.danger,
        ChartConfig.color.warning
      ],
      hoverBackgroundColor: [
        ChartConfig.color.danger,
        ChartConfig.color.warning
      ]
    }]
  }
}

// Active User
export const activeUser = [
  {
    id: 1,
    flag: 'icons8-usa',
    countryName: 'United States',
    userCount: 150,
    userPercent: 20,
    status: 1
  },
  {
    id: 2,
    flag: 'icons8-hungary',
    countryName: 'Hungary',
    userCount: 180,
    userPercent: -5,
    status: 0
  },
  {
    id: 3,
    flag: 'icons8-france',
    countryName: 'France',
    userCount: 86,
    userPercent: 20,
    status: 1
  },
  {
    id: 4,
    flag: 'icons8-japan',
    countryName: 'Japan',
    userCount: 243,
    userPercent: 20,
    status: 1
  },
  {
    id: 5,
    flag: 'icons8-china',
    countryName: 'China',
    userCount: 155,
    userPercent: 20,
    status: 0
  },
  {
    id: 6,
    flag: 'ru',
    countryName: 'Russia',
    userCount: 155,
    userPercent: 20,
    status: 0
  }
];